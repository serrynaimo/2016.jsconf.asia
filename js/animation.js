var camera, scene, renderer;
var tower, target, light;
var start, k = 0;
var SHADOW_MAP_WIDTH = SHADOW_MAP_HEIGHT = 512;

var svgJ = 'm 165.65,526.47375 48.2125,-29.1775 C 223.16375,513.7875 231.625,527.74 251.92,527.74 c 19.45375,0 31.71875,-7.60975 31.71875,-37.21 l 0,-201.3 59.20375,0 0,202.1375 c 0,61.32 -35.94375,89.23125 -88.385,89.23125 -47.36125,0 -74.8525,-24.52875 -88.8075,-54.13'
var svgS = 'm 375,520.13 48.20625,-27.91125 c 12.69,20.72375 29.1825,35.9475 58.36125,35.9475 24.53125,0 40.17375,-12.26475 40.17375,-29.18125 0,-20.29875 -16.06875,-27.48875 -43.135,-39.32625 l -14.7975,-6.3475 c -42.715,-18.18125 -71.05,-41.0175 -71.05,-89.2275 0,-44.40375 33.83125,-78.2375 86.695,-78.2375 37.6375,0 64.7025,13.11125 84.15375,47.36625 l -46.09625,29.60125 c -10.15,-18.1825 -21.1425,-25.37125 -38.0575,-25.37125 -17.33875,0 -28.335,10.995 -28.335,25.37125 0,17.7625 10.99625,24.9525 36.3675,35.94875 l 14.8,6.3425 c 50.325,21.56875 78.66,43.5575 78.66,93.03375 0,53.2875 -41.86625,82.465 -98.11,82.465 -54.97625,0 -90.5,-26.2175 -107.83625,-60.47375'

var mouse = {x: 0, y: 0}

init();

setTimeout(animate, 1000);


function makeText( text, yOffset ) {

	var text = new THREE.TextGeometry( text, {
		size: 24,
		height: 0,
		curveSegments: 8,
		font: "Doppio One",
		bevelEnabled: false
	});

	text.computeBoundingBox();

	var mesh = new THREE.Mesh( text, new THREE.MeshBasicMaterial( { color: 0xffffff } ) );

	mesh.position.x = 20;
	mesh.position.y = yOffset;
	mesh.position.z = 1;

	mesh.rotation.x = 0;
	mesh.rotation.y = Math.PI * 2;

	mesh.castShadow = false;
	mesh.receiveShadow = true;

	return mesh;

}

function createBox (width, depth, color, xOffset) {
	var geometry = new THREE.BoxGeometry( width, 500, depth );
	var material = new THREE.MeshPhongMaterial( { color: color, specular: 0x444444, shininess: 1 } );
	var x = 0
	
	var box = new THREE.Mesh( geometry, material );
	box.position.y = 0;
	box.position.x = xOffset + width / 2;
	box.position.z = -depth / 2;
	box.castShadow = true;
	box.receiveShadow = true;

	xOffset += width

	return box
}

function init() {

	camera = new THREE.PerspectiveCamera( 70, window.innerWidth / window.innerHeight, 1, 10000 );

	scene = new THREE.Scene();
	// scene.fog = new THREE.FogExp2( 0x1d91ef, 0.0015 );


	scene.add( new THREE.AmbientLight( new THREE.Color(0.3, 0.3, 0.4) ) );

	light = new THREE.PointLight( 0xffffff );

	scene.add( light );


	light = new THREE.SpotLight( 0xffffff, 1, 0, Math.PI / 2, 1 );
	light.position.set( 0, 500, 1500 );
	light.target.position.set( 0, 0, 0 );

	light.castShadow = true;

	light.shadowCameraNear = 1200;
	light.shadowCameraFar = 2500;
	light.shadowCameraFov = 50;

	//light.shadowCameraVisible = true;

	light.shadowBias = 0.0001;

	light.shadowMapWidth = SHADOW_MAP_WIDTH;
	light.shadowMapHeight = SHADOW_MAP_HEIGHT;

	scene.add( light );


	toplight = new THREE.PointLight( new THREE.Color(0.9, 0.9, 1) );
	toplight.position.y = 1000;

	scene.add( toplight );



	var darkblue = createBox(60, 10000, 0x021C7F, 440)
	scene.add( darkblue )

	var blue = createBox(80, 8300, 0x256BC4, 360)
	scene.add( blue )

	var moreBlue = createBox(60, 8000, 0x56AAEB, 300)
	scene.add( moreBlue )

	var darkblue2 = createBox(100, 7000, 0x021C7F, 200)
	scene.add( darkblue2 )

	var yellowBlue = createBox(90, 4000, 0xFFED2A, 110)
	scene.add( yellowBlue )

	var lightBlue = createBox(110, 2000, 0x21C7F, 0)
	scene.add( lightBlue )



	var letterJ = createShape(transformSVGPath(svgJ), 0xf8f8f8, 0, 250, 1, 180 * Math.PI / 180, 0, 0, 0.8)
	scene.add( letterJ )
	var letterS = createShape(transformSVGPath(svgS), 0xf8f8f8, 0, 250, 1, 180 * Math.PI / 180, 0, 0, 0.8)
	scene.add( letterS )

	var date = makeText( '25+26 NOV 2016', 200 );
	scene.add( date )
	var location = makeText( 'SINGAPORE', 156 );
	scene.add( location )


	start = Date.now();

	target = new THREE.Vector3();
	target.x = 500
	target.y = 50

	camera.up = new THREE.Vector3(0,1,0).normalize();

	renderer = new THREE.WebGLRenderer({antialias: true});
	renderer.setClearColor(0x111111);
	renderer.setPixelRatio( window.devicePixelRatio );
	renderer.setSize( window.innerWidth, window.innerHeight );
	renderer.shadowMap.enabled = false;
	renderer.shadowMap.type = THREE.PCFShadowMap;

	window.addEventListener('mousemove', onMouseMove)
	intro = document.getElementById('intro')
	intro.appendChild( renderer.domElement );
	body = document.getElementById('body')

	window.addEventListener( 'resize', onWindowResize, false );

}

function onMouseMove (event) {
	mouse.x = (event.clientX - window.innerWidth / 2) / window.innerWidth * k * 100
	mouse.y = (event.clientY - window.innerHeight / 2) /window.innerHeight * k * 100
}

function onWindowResize () {

	camera.aspect = window.innerWidth / window.innerHeight;
	camera.updateProjectionMatrix();

	renderer.setSize( window.innerWidth, window.innerHeight );

}

function easeInOut ( k ) {

	if ((k *= 2) < 1) {
		return 0.5 * k * k;
	}

	return - 0.5 * (--k * (k - 2) - 1);

}

function easeOut (k) {

	return k * (2 - k);

}



function animate() {

	requestAnimationFrame( animate );

	var len = 12;
	var time = Math.min( (Date.now() - start) / 1000, len);
	k = easeInOut(time / len);

	var z = -11000 + (12000 * k)

	if(z < 0) {
		x = 500 - (250 * (1+k) * (1+k) * (1+k))
		camera.position.x = x
		camera.position.y = target.y
		target.z = z
	} else {
		target.x = 500 - Math.sin(z / 1000 * Math.PI / 2) * 250
		camera.position.x = x - Math.sin(z / 1000 * Math.PI / 2) * (x - 250) + mouse.x
		camera.position.y = target.y + (350 * z / 1000) + mouse.y
		intro.style.transform = 'translateY(' + (-z / 1000 * window.innerHeight / 5) + 'px)'
		body.style.transform = 'translateY(' + (-z / 1000 * window.innerHeight * 3 / 5) + 'px)'
	}
	camera.position.z = z;
	camera.lookAt(target);

	light.position.copy( camera.position );
	light.position.x = light.position.x - 500
	light.position.y = light.position.y + 200
	light.position.z = light.position.z - 500

	renderer.render( scene, camera );

}









function createShape( shape, color, x, y, z, rx, ry, rz, s ) {
  // flat shape

  var geometry = new THREE.ShapeGeometry( shape );
  var material = new THREE.MeshBasicMaterial({
    color: color, 
    side: THREE.DoubleSide,
    overdraw: false
  });
  
  var mesh = new THREE.Mesh( geometry, material );
  mesh.position.set( x, y, z );
  mesh.rotation.set( rx, ry, rz );
  mesh.scale.set( s, s, s );
  mesh.receiveShadow = true;

  return mesh;
}

function transformSVGPath(pathStr) {

  const DIGIT_0 = 48, DIGIT_9 = 57, COMMA = 44, SPACE = 32, PERIOD = 46,
      MINUS = 45;

  var path = new THREE.Shape();
  
  var idx = 1, len = pathStr.length, activeCmd,
      x = 0, y = 0, nx = 0, ny = 0, firstX = null, firstY = null,
      x1 = 0, x2 = 0, y1 = 0, y2 = 0,
      rx = 0, ry = 0, xar = 0, laf = 0, sf = 0, cx, cy;
  
  function eatNum() {
    var sidx, c, isFloat = false, s;
    // eat delims
    while (idx < len) {
      c = pathStr.charCodeAt(idx);
      if (c !== COMMA && c !== SPACE)
        break;
      idx++;
    }
    if (c === MINUS)
      sidx = idx++;
    else
      sidx = idx;
    // eat number
    while (idx < len) {
      c = pathStr.charCodeAt(idx);
      if (DIGIT_0 <= c && c <= DIGIT_9) {
        idx++;
        continue;
      }
      else if (c === PERIOD) {
        idx++;
        isFloat = true;
        continue;
      }
      
      s = pathStr.substring(sidx, idx);
      return isFloat ? parseFloat(s) : parseInt(s);
    }
    
    s = pathStr.substring(sidx);
    return isFloat ? parseFloat(s) : parseInt(s);
  }
  
  function nextIsNum() {
    var c;
    // do permanently eat any delims...
    while (idx < len) {
      c = pathStr.charCodeAt(idx);
      if (c !== COMMA && c !== SPACE)
        break;
      idx++;
    }
    c = pathStr.charCodeAt(idx);
    return (c === MINUS || (DIGIT_0 <= c && c <= DIGIT_9));
  }
  
  var canRepeat;
  activeCmd = pathStr[0];
  while (idx <= len) {
    canRepeat = true;
    switch (activeCmd) {
        // moveto commands, become lineto's if repeated
      case 'M':
        x = eatNum();
        y = eatNum();
        path.moveTo(x, y);
        activeCmd = 'L';
        break;
      case 'm':
        x += eatNum();
        y += eatNum();
        path.moveTo(x, y);
        activeCmd = 'l';
        break;
      case 'Z':
      case 'z':
        canRepeat = false;
        if (x !== firstX || y !== firstY)
          path.lineTo(firstX, firstY);
        break;
        // - lines!
      case 'L':
      case 'H':
      case 'V':
        nx = (activeCmd === 'V') ? x : eatNum();
        ny = (activeCmd === 'H') ? y : eatNum();
        path.lineTo(nx, ny);
        x = nx;
        y = ny;
        break;
      case 'l':
      case 'h':
      case 'v':
        nx = (activeCmd === 'v') ? x : (x + eatNum());
        ny = (activeCmd === 'h') ? y : (y + eatNum());
        path.lineTo(nx, ny);
        x = nx;
        y = ny;
        break;
        // - cubic bezier
      case 'C':
        x1 = eatNum(); y1 = eatNum();
      case 'S':
        if (activeCmd === 'S') {
          x1 = 2 * x - x2; y1 = 2 * y - y2;
        }
        x2 = eatNum();
        y2 = eatNum();
        nx = eatNum();
        ny = eatNum();
        path.bezierCurveTo(x1, y1, x2, y2, nx, ny);
        x = nx; y = ny;
        break;
      case 'c':
        x1 = x + eatNum();
        y1 = y + eatNum();
      case 's':
        if (activeCmd === 's') {
          x1 = 2 * x - x2;
          y1 = 2 * y - y2;
        }
        x2 = x + eatNum();
        y2 = y + eatNum();
        nx = x + eatNum();
        ny = y + eatNum();
        path.bezierCurveTo(x1, y1, x2, y2, nx, ny);
        x = nx; y = ny;
        break;
        // - quadratic bezier
      case 'Q':
        x1 = eatNum(); y1 = eatNum();
      case 'T':
        if (activeCmd === 'T') {
          x1 = 2 * x - x1;
          y1 = 2 * y - y1;
        }
        nx = eatNum();
        ny = eatNum();
        path.quadraticCurveTo(x1, y1, nx, ny);
        x = nx;
        y = ny;
        break;
      case 'q':
        x1 = x + eatNum();
        y1 = y + eatNum();
      case 't':
        if (activeCmd === 't') {
          x1 = 2 * x - x1;
          y1 = 2 * y - y1;
        }
        nx = x + eatNum();
        ny = y + eatNum();
        path.quadraticCurveTo(x1, y1, nx, ny);
        x = nx; y = ny;
        break;
        // - elliptical arc
      case 'A':
        rx = eatNum();
        ry = eatNum();
        xar = eatNum() * DEGS_TO_RADS;
        laf = eatNum();
        sf = eatNum();
        nx = eatNum();
        ny = eatNum();
        if (rx !== ry) {
          console.warn("Forcing elliptical arc to be a circular one :(",
                       rx, ry);
        }
        // SVG implementation notes does all the math for us! woo!
        // http://www.w3.org/TR/SVG/implnote.html#ArcImplementationNotes
        // step1, using x1 as x1'
        x1 = Math.cos(xar) * (x - nx) / 2 + Math.sin(xar) * (y - ny) / 2;
        y1 = -Math.sin(xar) * (x - nx) / 2 + Math.cos(xar) * (y - ny) / 2;
        // step 2, using x2 as cx'
        var norm = Math.sqrt(
          (rx*rx * ry*ry - rx*rx * y1*y1 - ry*ry * x1*x1) /
          (rx*rx * y1*y1 + ry*ry * x1*x1));
        if (laf === sf)
          norm = -norm;
        x2 = norm * rx * y1 / ry;
        y2 = norm * -ry * x1 / rx;
        // step 3
        cx = Math.cos(xar) * x2 - Math.sin(xar) * y2 + (x + nx) / 2;
        cy = Math.sin(xar) * x2 + Math.cos(xar) * y2 + (y + ny) / 2;
        
        var u = new THREE.Vector2(1, 0),
            v = new THREE.Vector2((x1 - x2) / rx,
                                  (y1 - y2) / ry);
        var startAng = Math.acos(u.dot(v) / u.length() / v.length());
        if (u.x * v.y - u.y * v.x < 0)
          startAng = -startAng;
        
        // we can reuse 'v' from start angle as our 'u' for delta angle
        u.x = (-x1 - x2) / rx;
        u.y = (-y1 - y2) / ry;
        
        var deltaAng = Math.acos(v.dot(u) / v.length() / u.length());
        // This normalization ends up making our curves fail to triangulate...
        if (v.x * u.y - v.y * u.x < 0)
          deltaAng = -deltaAng;
        if (!sf && deltaAng > 0)
          deltaAng -= Math.PI * 2;
        if (sf && deltaAng < 0)
          deltaAng += Math.PI * 2;
        
        path.absarc(cx, cy, rx, startAng, startAng + deltaAng, sf);
        x = nx;
        y = ny;
        break;
      default:
        throw new Error("weird path command: " + activeCmd);
    }
    if (firstX === null) {
      firstX = x;
      firstY = y;
    }
    // just reissue the command
    if (canRepeat && nextIsNum())
      continue;
    activeCmd = pathStr[idx++];
  }
  
  return path;
}
