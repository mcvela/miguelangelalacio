THREE.ShaderLib.water={uniforms:{normalSampler:{type:"t",value:null},mirrorSampler:{type:"t",value:null},alpha:{type:"f",value:1},time:{type:"f",value:0},distortionScale:{type:"f",value:20},textureMatrix:{type:"m4",value:new THREE.Matrix4()},sunColor:{type:"c",value:new THREE.Color(8355711)},sunDirection:{type:"v3",value:new THREE.Vector3(0.70707,0.70707,0)},eye:{type:"v3",value:new THREE.Vector3(0,0,0)},waterColor:{type:"c",value:new THREE.Color(5592405)}},vertexShader:["uniform mat4 textureMatrix;","uniform float time;","varying vec4 mirrorCoord;","varying vec3 worldPosition;","void main()","{","	mirrorCoord = modelMatrix * vec4( position, 1.0 );","	worldPosition = mirrorCoord.xyz;","	mirrorCoord = textureMatrix * mirrorCoord;","	gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 1.0 );","}"].join("\n"),fragmentShader:["precision highp float;","uniform sampler2D mirrorSampler;","uniform float alpha;","uniform float time;","uniform float distortionScale;","uniform sampler2D normalSampler;","uniform vec3 sunColor;","uniform vec3 sunDirection;","uniform vec3 eye;","uniform vec3 waterColor;","varying vec4 mirrorCoord;","varying vec3 worldPosition;","vec4 getNoise( vec2 uv )","{","	vec2 uv0 = ( uv / 103.0 ) + vec2(time / 17.0, time / 29.0);","	vec2 uv1 = uv / 107.0-vec2( time / -19.0, time / 31.0 );","	vec2 uv2 = uv / vec2( 8907.0, 9803.0 ) + vec2( time / 101.0, time / 97.0 );","	vec2 uv3 = uv / vec2( 1091.0, 1027.0 ) - vec2( time / 109.0, time / -113.0 );","	vec4 noise = ( texture2D( normalSampler, uv0 ) ) +","		( texture2D( normalSampler, uv1 ) ) +","		( texture2D( normalSampler, uv2 ) ) +","		( texture2D( normalSampler, uv3 ) );","	return noise * 0.5 - 1.0;","}","void sunLight( const vec3 surfaceNormal, const vec3 eyeDirection, float shiny, float spec, float diffuse, inout vec3 diffuseColor, inout vec3 specularColor )","{","	vec3 reflection = normalize( reflect( -sunDirection, surfaceNormal ) );","	float direction = max( 0.0, dot( eyeDirection, reflection ) );","	specularColor += pow( direction, shiny ) * sunColor * spec;","	diffuseColor += max( dot( sunDirection, surfaceNormal ), 0.0 ) * sunColor * diffuse;","}","void main()","{","	vec4 noise = getNoise( worldPosition.xz );","	vec3 surfaceNormal = normalize( noise.xzy * vec3( 1.5, 1.0, 1.5 ) );","	vec3 diffuseLight = vec3(0.0);","	vec3 specularLight = vec3(0.0);","	vec3 worldToEye = eye-worldPosition;","	vec3 eyeDirection = normalize( worldToEye );","	sunLight( surfaceNormal, eyeDirection, 100.0, 2.0, 0.5, diffuseLight, specularLight );","	float distance = length(worldToEye);","	vec2 distortion = surfaceNormal.xz * ( 0.001 + 1.0 / distance ) * distortionScale;","	vec3 reflectionSample = vec3( texture2D( mirrorSampler, mirrorCoord.xy / mirrorCoord.z + distortion ) );","	float theta = max( dot( eyeDirection, surfaceNormal ), 0.0 );","	float rf0 = 0.3;","	float reflectance = rf0 + ( 1.0 - rf0 ) * pow( ( 1.0 - theta ), 5.0 );","	vec3 scatter = max( 0.0, dot( surfaceNormal, eyeDirection ) ) * waterColor;","	vec3 albedo = mix( sunColor * diffuseLight * 0.3 + scatter, ( vec3( 0.1 ) + reflectionSample * 0.9 + reflectionSample * specularLight ), reflectance );","	gl_FragColor = vec4( albedo, alpha );","}"].join("\n")};THREE.Water=function(d,c,b,i){THREE.Object3D.call(this);this.name="water_"+this.id;function g(k,j){return k!==undefined?k:j}i=i||{};this.matrixNeedsUpdate=true;var a=g(i.textureWidth,512);var h=g(i.textureHeight,512);this.clipBias=g(i.clipBias,0);this.alpha=g(i.alpha,1);this.time=g(i.time,0);this.normalSampler=g(i.waterNormals,null);this.sunDirection=g(i.sunDirection,new THREE.Vector3(0.70707,0.70707,0));this.sunColor=new THREE.Color(g(i.sunColor,16777215));this.waterColor=new THREE.Color(g(i.waterColor,8355711));this.eye=g(i.eye,new THREE.Vector3(0,0,0));this.distortionScale=g(i.distortionScale,20);this.renderer=d;this.scene=b;this.mirrorPlane=new THREE.Plane();this.normal=new THREE.Vector3(0,0,1);this.mirrorWorldPosition=new THREE.Vector3();this.cameraWorldPosition=new THREE.Vector3();this.rotationMatrix=new THREE.Matrix4();this.lookAtPosition=new THREE.Vector3(0,0,-1);this.clipPlane=new THREE.Vector4();if(c instanceof THREE.PerspectiveCamera){this.camera=c}else{this.camera=new THREE.PerspectiveCamera();console.log(this.name+": camera is not a Perspective Camera!")}this.textureMatrix=new THREE.Matrix4();this.mirrorCamera=this.camera.clone();this.texture=new THREE.WebGLRenderTarget(a,h);this.tempTexture=new THREE.WebGLRenderTarget(a,h);var e=THREE.ShaderLib.water;var f=THREE.UniformsUtils.clone(e.uniforms);this.material=new THREE.ShaderMaterial({fragmentShader:e.fragmentShader,vertexShader:e.vertexShader,uniforms:f,transparent:true});this.material.uniforms.mirrorSampler.value=this.texture;this.material.uniforms.textureMatrix.value=this.textureMatrix;this.material.uniforms.alpha.value=this.alpha;this.material.uniforms.time.value=this.time;this.material.uniforms.normalSampler.value=this.normalSampler;this.material.uniforms.sunColor.value=this.sunColor;this.material.uniforms.waterColor.value=this.waterColor;this.material.uniforms.sunDirection.value=this.sunDirection;this.material.uniforms.distortionScale.value=this.distortionScale;this.material.uniforms.eye.value=this.eye;if(!THREE.Math.isPowerOfTwo(a)||!THREE.Math.isPowerOfTwo(h)){this.texture.generateMipmaps=false;this.tempTexture.generateMipmaps=false}this.updateTextureMatrix();this.render()};THREE.Water.prototype=Object.create(THREE.Mirror.prototype);THREE.Water.prototype.updateTextureMatrix=function(){function d(c){return c?c<0?-1:1:0}this.updateMatrixWorld();this.camera.updateMatrixWorld();this.mirrorWorldPosition.setFromMatrixPosition(this.matrixWorld);this.cameraWorldPosition.setFromMatrixPosition(this.camera.matrixWorld);this.rotationMatrix.extractRotation(this.matrixWorld);this.normal.set(0,0,1);this.normal.applyMatrix4(this.rotationMatrix);var b=this.mirrorWorldPosition.clone().sub(this.cameraWorldPosition);b.reflect(this.normal).negate();b.add(this.mirrorWorldPosition);this.rotationMatrix.extractRotation(this.camera.matrixWorld);this.lookAtPosition.set(0,0,-1);this.lookAtPosition.applyMatrix4(this.rotationMatrix);this.lookAtPosition.add(this.cameraWorldPosition);var g=this.mirrorWorldPosition.clone().sub(this.lookAtPosition);g.reflect(this.normal).negate();g.add(this.mirrorWorldPosition);this.up.set(0,-1,0);this.up.applyMatrix4(this.rotationMatrix);this.up.reflect(this.normal).negate();this.mirrorCamera.position.copy(b);this.mirrorCamera.up=this.up;this.mirrorCamera.lookAt(g);this.mirrorCamera.aspect=this.camera.aspect;this.mirrorCamera.updateProjectionMatrix();this.mirrorCamera.updateMatrixWorld();this.mirrorCamera.matrixWorldInverse.getInverse(this.mirrorCamera.matrixWorld);this.textureMatrix.set(0.5,0,0,0.5,0,0.5,0,0.5,0,0,0.5,0.5,0,0,0,1);this.textureMatrix.multiply(this.mirrorCamera.projectionMatrix);this.textureMatrix.multiply(this.mirrorCamera.matrixWorldInverse);this.mirrorPlane.setFromNormalAndCoplanarPoint(this.normal,this.mirrorWorldPosition);this.mirrorPlane.applyMatrix4(this.mirrorCamera.matrixWorldInverse);this.clipPlane.set(this.mirrorPlane.normal.x,this.mirrorPlane.normal.y,this.mirrorPlane.normal.z,this.mirrorPlane.constant);var f=new THREE.Vector4();var a=this.mirrorCamera.projectionMatrix;f.x=(d(this.clipPlane.x)+a.elements[8])/a.elements[0];f.y=(d(this.clipPlane.y)+a.elements[9])/a.elements[5];f.z=-1;f.w=(1+a.elements[10])/a.elements[14];var h=new THREE.Vector4();h=this.clipPlane.multiplyScalar(2/this.clipPlane.dot(f));a.elements[2]=h.x;a.elements[6]=h.y;a.elements[10]=h.z+1-this.clipBias;a.elements[14]=h.w;var e=new THREE.Vector3();e.setFromMatrixPosition(this.camera.matrixWorld);this.eye=e;this.material.uniforms.eye.value=this.eye};