<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>3D Washing Machine Simulator</title>
    <!--strt BS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery311.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--end BS-->

    <script src="threeJS/three.min.js"></script>
    <script src="threeJS/OrbitControls.js"></script>
    <script src="threeJS/OBJLoader.js"></script>


    <style>
        #myCanvas {

        }

        .body-content {
            margin-top: 80px;
        }

        .my-btn {
            margin-right: 1px
        }

        .texture {
            width: 20px;
        }

        #page {
            display: none;
        }
        #loading {
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 100;
            width: 100vw;
            height: 100vh;
            background-color: rgba(192, 192, 192, 0.5);
            background-image: url("http://i.stack.imgur.com/MnyxU.gif");
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>

</head>
<body>
<div class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a href="" class="navbar-brand">Washing Machine</a>
    </div>
</div>


<div class="body-content">

    <div class="dark-overlay">
        <div class="home-inner">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-9">
                        <div class="col-lg-12" id="canvas-div" style="left: -10px">
                            <div id="myCanvas" class=""></div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action active">
                                        Head
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <span class="btn my-btn head"
                                              style="background: #1c3a53;">&nbsp;&nbsp;&nbsp;</span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <span class="btn my-btn head"
                                              style="background: #00cd66;">&nbsp;&nbsp;&nbsp;</span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <img src="texture/washHead_2.jpg" class="txHead texture" alt="">
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <img src="texture/washHead_3.jpg" class="txHead texture" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action active">
                                        Body
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <span class="btn my-btn body"
                                              style="background: #151274;">&nbsp;&nbsp;&nbsp;</span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <span class="btn my-btn body"
                                              style="background: #c4cd4b;">&nbsp;&nbsp;&nbsp;</span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <img src="texture/washBody_2.jpg" class="txBody texture" alt="">
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <img src="texture/washBody_3.jpg" class="txBody texture" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action active">
                                        Leg
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <span class="btn my-btn leg"
                                              style="background: #531719;">&nbsp;&nbsp;&nbsp;</span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <span class="btn my-btn leg"
                                              style="background: #6d3274;">&nbsp;&nbsp;&nbsp;</span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <img src="texture/washLeg_2.jpg" class="txLeg texture" alt="">
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <img src="texture/washLeg_3.jpg" class="txLeg texture" alt="">
                                    </a>
                                    <div class="clearflix"></div>
                                </div>


                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-lg-12">
                                <h3>World Projection</h3>
                                <span class="btn my-btn world-color"
                                      style="background: #fdfdfd; border: 1px solid #000000">&nbsp;&nbsp;&nbsp;</span>
                                <span class="btn my-btn world-color"
                                      style="background: #c42025;">&nbsp;&nbsp;&nbsp;</span>
                                <span class="btn my-btn world-color"
                                      style="background: #009acd;">&nbsp;&nbsp;&nbsp;</span>
                                <span class="btn my-btn world-color"
                                      style="background: #ffd700;">&nbsp;&nbsp;&nbsp;</span>
                                <span class="btn my-btn world-color"
                                      style="background: #ff4f00;">&nbsp;&nbsp;&nbsp;</span>
                                <span class="btn my-btn world-color"
                                      style="background: #1c3a53;">&nbsp;&nbsp;&nbsp;</span>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-12">
                                <button class="btn btn-dark btn-lg reset-scene">Reset</button>
                                &nbsp;&nbsp;&nbsp;&nbsp
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="page"></div>
<div id="loading"></div>

<script>
    $(window).on('load', function() { // makes sure the whole site is loaded
        $('#page').fadeOut(); // will first fade out the loading animation
        $('#loading').delay(50).fadeOut('slow'); // will fade out the white DIV that covers the website.
        //$('body').delay(50).css({'overflow':'visible'});
    });

    $(document).ready(function () {
        var width = document.getElementById('canvas-div').clientWidth,
            height = window.innerHeight - 100;

        var scene = new THREE.Scene();
        var camera = new THREE.PerspectiveCamera(45, width / height, 0.1, 3000);
        var renderer = new THREE.WebGLRenderer({antialias: true});
        renderer.setSize(width, height);
        renderer.setClearColor(0x231F20);
        renderer.shadowMap.enabled = true;
        renderer.setPixelRatio(devicePixelRatio);
        renderer.shadowMap.type = THREE.PCFSoftShadowMap;

        var myCanvas = document.getElementById('myCanvas');
        myCanvas.appendChild(renderer.domElement);
        var control = new THREE.OrbitControls(camera, renderer.domElement);

        var r = "img/Park3Med/";

        var urls = [
            r + "ny.jpg", r + "ny.jpg",
            r + "ny.jpg", r + "ny.jpg",
            r + "ny.jpg", r + "ny.jpg"
        ];

        var textureCube = new THREE.CubeTextureLoader().load(urls);
        textureCube.mapping = THREE.CubeRefractionMapping;

        scene = new THREE.Scene();
        //scene.background = textureCube;
        // work section //

        /* Light */
        var ambientLight = new THREE.AmbientLight(0xfdfdfd);
        scene.add(ambientLight);

        var pointLight = new THREE.PointLight(0xffffd8, 2.5, 10);
        var pointLight2 = new THREE.PointLight(0xffffd8, 2, 10);
        pointLight.position.set(-2, 1.5, 3);
        pointLight2.position.set(10, 1.5, -8);
        pointLight.castShadow = true;
        pointLight.shadow.camera.near = 0.1;       // default
        pointLight.shadow.camera.far = 25;        // default
        scene.add(pointLight);
        scene.add(pointLight2);
        /* Light */

        /*start Camera Position*/
        camera.position.set(-3, 5, 8);
        camera.lookAt(scene.position);
        //camera.position.y = 50;    //center rotation
        //camera.rotation.x = -1.59; //center rotation
        /*end Camera Position*/

        /* Texture */
        var textureLoad = new THREE.TextureLoader();
        /* Texture */

        // work section //
        var headMaterial;
        var bodyMaterial;
        var legMaterial;

        var objMesh;

        var loader = new THREE.OBJLoader();
        loader.load('obj/washMeshine.obj', function (loadedMesh) {

            var glassMaterial = new THREE.MeshPhongMaterial({
                map: textureLoad.load('texture/washHead.jpg'),
                envMap: textureCube,
                //refractionRatio: 0.98,
                refractionRatio: 1,
                reflectivity: 1,
                //transparent: true,
                //opacity: 0.1,
            });
            headMaterial = new THREE.MeshPhongMaterial({
                map: textureLoad.load('texture/washHead.jpg'),
                normalMap: textureLoad.load('texture/norm/washHead.jpg'),
                specularMap: textureLoad.load('texture/spec/washHead.jpg'),
                aoMap: textureLoad.load('texture/occ/washHead.jpg'),
            });
            bodyMaterial = new THREE.MeshPhongMaterial({
                map: textureLoad.load('texture/washBody.jpg'),
                normalMap: textureLoad.load('texture/norm/washBody.jpg'),
                specularMap: textureLoad.load('texture/spec/washBody.jpg'),
                aoMap: textureLoad.load('texture/occ/washBody.jpg'),
            });
            var gateMaterial = new THREE.MeshPhongMaterial({
                map: textureLoad.load('texture/washGate.jpg'),
            });
            legMaterial = new THREE.MeshPhongMaterial({
                map: textureLoad.load('texture/washLeg.jpg'),
                normalMap: textureLoad.load('texture/norm/washLeg.jpg'),
                specularMap: textureLoad.load('texture/spec/washLeg.jpg'),
                aoMap: textureLoad.load('texture/occ/washLeg.jpg'),
            });
            loadedMesh.children.forEach(function (child) {
                child.castShadow = true;
                child.receiveShadow = true;
            });
            //console.log(loadedMesh);
            loadedMesh.children[0].material = glassMaterial;
            loadedMesh.children[1].material = legMaterial;
            loadedMesh.children[2].material = headMaterial;
            loadedMesh.children[3].material = gateMaterial;
            loadedMesh.children[4].material = bodyMaterial;
            scene.add(loadedMesh);
            loadedMesh.rotation.y = -1.57;

            objMesh = loadedMesh;
        });

        /*String.prototype.filename = function(extension){
            var s= this.replace(/\\/g, '/');
            s= s.substring(s.lastIndexOf('/')+ 1);
            return extension? s.replace(/[?#].+$/, ''): s.split('.')[0];
        };*/

        $('.world-color').click(function () {
            ambientLight.color = new THREE.Color(this.style.backgroundColor);
        });

        $('a').click(function () {
            if ($(this).children('.head').length > 0) {
                var color = $(this)[0].firstElementChild.style.backgroundColor;
                headMaterial.color = new THREE.Color(color);
            };
        });
        $('a').click(function () {
            if ($(this).children('.body').length > 0) {
                var color = $(this)[0].firstElementChild.style.backgroundColor;
                bodyMaterial.color = new THREE.Color(color);
            };
        });
        $('a').click(function () {
            if ($(this).children('.leg').length > 0) {
                var color = $(this)[0].firstElementChild.style.backgroundColor;
                legMaterial.color = new THREE.Color(color);
            };
        });

        $('a').click(function () {
            if ($(this).children('.txHead').length > 0) {
                var src = $(this).children('.txHead').attr('src');
                headMaterial.map = textureLoad.load(src);
            };
        });
        $('a').click(function () {
            if ($(this).children('.txBody').length > 0) {
                var src = $(this).children('.txBody').attr('src');
                bodyMaterial.map = textureLoad.load(src);
            };
        });
        $('a').click(function () {
            if ($(this).children('.txLeg').length > 0) {
                var src = $(this).children('.txLeg').attr('src');
                legMaterial.map = textureLoad.load(src);
            };
        });

        $('.reset-scene').click(function () {
            headMaterial.color = new THREE.Color(0xfdfdfd);
            bodyMaterial.color = new THREE.Color(0xfdfdfd);
            legMaterial.color = new THREE.Color(0xfdfdfd);

            headMaterial.map = textureLoad.load('texture/washHead.jpg');
            bodyMaterial.map = textureLoad.load('texture/washBody.jpg');
            legMaterial.map = textureLoad.load('texture/washLeg.jpg');

            ambientLight.color = new THREE.Color(0xfdfdfd);
        });

        var groundGeom = new THREE.PlaneGeometry(30, 30);
        var groundMater = new THREE.MeshPhongMaterial({
            color: 0x4e6b81
        });
        var groundMesh = new THREE.Mesh(groundGeom, groundMater);
        groundMesh.receiveShadow = true;
        scene.add(groundMesh);
        groundMesh.position.set(0, -1.73, 0);
        groundMesh.quaternion.setFromAxisAngle(new THREE.Vector3( 1, 0, 0), -Math.PI / 2);

        var spGeom = new THREE.SphereGeometry(0.03, 10, 10);
        var spMater = new THREE.MeshPhongMaterial();
        var spMesh = new THREE.Mesh(spGeom, spMater);
        var spMesh2 = new THREE.Mesh(spGeom, spMater);
        //scene.add(spMesh);
        //scene.add(spMesh2);
        spMesh.position.copy(pointLight.position);
        spMesh2.position.copy(pointLight2.position);

        function onResize() {
            var width = document.getElementById('canvas-div').clientWidth,
                height = window.innerHeight - 100;
            camera.aspect = width / height;
            camera.updateProjectionMatrix();
            renderer.setSize(width, height);
        }

        // App Logic //
        var delta = 0;
        var roundX = 0;
        var roundZ = 0;
        //pointLight.position.x += (Math.sin(delta));
        function update() {
            if (objMesh != undefined) {

                //camera.lookAt(objMesh.position);
                delta += 0.009;
                roundX = Math.sin(delta)*10;
                roundZ = Math.cos(delta)*10;
                //camera.position.x = roundX;
                //camera.position.z = roundZ;
                //console.log(roundX);
                //Math.sin(delta);
                //pointLight.position.x += (roundX);
                //spMesh.position.copy(pointLight.position);
                //console.log(objMesh);
                //objMesh.rotation.y += 0.005;
                //objMesh.children[1].scale.x += 0.1;
            }
            //groundMesh.rotation.z += 0.01;
        }

        // Draw Scene //
        function render() {
            renderer.render(scene, camera);
        }

        // App Loop //
        function appLoop() {
            requestAnimationFrame(appLoop);

            update();
            render();
        }

        appLoop();
        window.addEventListener('resize', onResize, false);
    });


</script>
</body>
</html>