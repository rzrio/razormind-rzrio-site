<?php
/* @var $this yii\web\View */
$this->title = "rzr.io"
?>

<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel=stylesheet type=text/css><link href=http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css rel=stylesheet type=text/css>



 
<div id=bodyWrapper class=body-wrapper>
<!-- Landing page loading screen -->
<div id=initLoadingScreen class=init-loading-screen><div class=title>NOW LOADING</div><div class=init-loading-bar><div id=initProgressBar class=init-loading-progress></div></div></div>
<!-- Landing page intro animation --><div id=initIntroScreen class=init-intro-screen><div class=bar-top></div><div class=bar-bottom></div><div id=initIntroSubtitle class=subtitle>Bruno Quintela presents</div><div id=initIntroTitle class=title><p id=letteringTitle class=lettering-title>THIS FORM I HOLD NOW</p><span id=introInfo class=intro-info>A realtime rendered webGL experiment</span></div></div>
<!-- Scene loading screen --><div id=modelLoadingScreen class=model-loading-screen><div id=loadingInfoTop class=loading-info-top>now loading 3D Model assets, please wait</div><div class=model-loading-bar><div id=progressBar class=model-loading-progress></div></div></div>
<!-- Drag model info -->
<div id=currentModelInfo class=current-model-info><div id=contentPerformance class=content-performance><div class="content-subtitle background-highlight">:: performance</div><div id=statsContainer class=content-subtitle></div></div></div><!-- fullscreen background video --><video id=videoBackground class="video-background hide" loop="" autoplay=""></video><div class=video-overlay></div><!-- Webgl renderer canvas --><canvas id=threejsCanvas class=threejs-canvas></canvas><!-- main menu --><nav id=menu class="menu hide"><ul><li id=creditsAnchor><span>Credits</span></li><li id=contactAnchor><span>Contact</span></li><li id=aboutAnchor><span>About</span></li><li id=galleryAnchor><span>Portfolio</span></li><li><span></span></li><li><span></span></li><li><span></span></li><li id=homeAnchor class=active><span><b>RZR</b>.IO</span></li></ul><div id=menuItemActive class=item-active-bottom><div class="menu-handler left"></div><!--div class="menu-handler right"></div--></div></nav><!-- burguer menu and fullscreen nav --><div id=burguerMenu class="burguer-container hide"><div id=burguerTitle class=burguer-title>::Home</div><a id=trigger-overlay class=burger href=#><span></span></a></div><div class=burguer-overlay><nav><ul><li><a id=aboutBurguerItem href=#>About</a></li><li><a id=galleryBurguerItem href=#>Portfolio</a></li><li><a id=contactBurguerItem href=#>Contact</a></li><li><a id=creditsBurguerItem href=#>Credits</a></li></ul></nav></div>

    <!-- SECTION ABOUT START--><section id=aboutSection class="section-content section-about hide"><div class=content-left><div class=content-title><span>About</span></div><div class=content-subtitle>Skills</div><div class="rule right"></div><span class=item>Blockchain</span> <span class=item>Financial Services</span> <span class=item>Enterprise</span></div><div class=content-right><div class=content-title><span class=highlight>US</span></div><div class=content-info><div class=content-subtitle>Who are We</div><div class="rule left"></div><span class=description>We research, develop, patent, and licence blockchain technology.</span></div><div class=content-info><div class=content-subtitle>What We Do</div><div class="rule left"></div><span class=description>Our current focus is to develop decentralized experiences for the web - including the worlds first blockchain OS. To achieve perfect balance between  delivery and performance is always a goal, and this site is addressing medium-high end enterprises.</span></div><div class=content-info><div class=content-subtitle>What's Next</div><div class="rule left"></div><span class=description>DeOS is coming and we're looking forward to it! For the first time in decades we will have the opportunity to change how to surf the web. </span></div></div></section><!-- SECTION ABOUT END-->

    <!-- SECTION CONTACT START --><section id=contactSection class="section-content section-contact hide"><div class=content-left><div class=content-title><span class=highlight>get in</span></div></div><div class=content-right><div class=content-info><div class=content-title>touch</div><div class="rule left"></div><span class=description>If you have something to share with us, work related or otherwise please leave us a message - we will reply as soon as we can.</span><div class="rule left"></div><div class=content-subtitle><a href=../ourwhitepaper.pdf class=resume title="download resume" target=_blank>download whitepaper</a></div></div><div class="content-info content-social"><div class=content-title-fake></div><div class=content-subtitle>social</div><div class="rule left"></div><div class=footer-social-links><a href=https://twitter.com/razormind title=Twitter target=_blank><i class="fa fa-twitter"></i></a> <a href=https://www.behance.net/razormind title=Behance target=_blank><i class="fa fa-behance"></i></a> <a href="https://linkedin.com/razormind/" title=LinkedIn target=_blank><i class="fa fa-linkedin"></i></a> <a href=https://soundcloud.com/jawadyaqub title=Soundcloud target=_blank><i class="fa fa-soundcloud"></i></a> <!--a href="https://vimeo.com/user40758660" title="Vimeo" target="_blank"><i class="fa fa-vimeo-square"></i></a--></div></div><div class=content-info><div class=content-title-fake></div><div class=content-subtitle>email</div><div class="rule left"></div><div class=content-subtitle><a class=email target=_blank href=mailto:hello@rzr.io>hello@rzr.io</a></div></div></div><br></section><!-- SECTION CONTACT END -->

    <!--SECTION CREDITS START --><section id=creditsSection class="section-content section-credits hide"><div class=content-left><div class=content-subtitle>To all contributors</div><div class="rule right"></div></div><div class=content-right><div class=content-info-list><div class=content-subtitle>Software</div><div class="rule left"></div><ul class=credits-list><li><a class=anchor-link target=_blank href="http://www.blender.org/">HSBC</a></li><li><a class=anchor-link target=_blank href="http://www.makehuman.org/">GSI Fund</a></li><li><a class=anchor-link target=_blank href="http://meshlab.sourceforge.net/">Razormind Canada</a></li><li><a class=anchor-link target=_blank href="http://www.gimp.org/">Gimp</a></li><li><a class=anchor-link target=_blank href="http://audacity.sourceforge.net/">Cassandra</a></li></ul></div><div class=content-info-list><div class=content-subtitle>Clever Cloud</div><div class="rule left"></div><ul class=credits-list><li><a class=anchor-link target=_blank href="http://threejs.org/">ThreeJS</a></li><li><a class=anchor-link target=_blank href=https://github.com/desandro/classie>riskMethods</a></li><li><a class=anchor-link target=_blank href="https://github.com/mrdoob/stats.js/">Razormind Dragon</a></li><li><a class=anchor-link target=_blank href="https://github.com/tweenjs/">Anthemis</a></li><li><a class=anchor-link target=_blank href="http://stereobit.github.io/dragend/">Eris Industries</a></li></ul></div><div class=content-info-list><div class=content-subtitle>Communities</div><div class="rule left"></div><ul class=credits-list><li><a class=anchor-link target=_blank href="http://codepen.io/">Codepen</a></li><li><a class=anchor-link target=_blank href="http://tympanus.net/codrops/">Codrops</a></li><li><a class=anchor-link target=_blank href="http://blendernation.com/">BlenderNation</a></li></ul></div><div class=content-info-list><div class=content-subtitle>Special thanks</div><div class="rule left"></div><ul class=credits-list><li><a class=anchor-link target=_blank href=https://twitter.com/mrdoob>Ricardo Cabello</a></li><li><a class=anchor-link target=_blank href=https://twitter.com/alteredq>AlteredQualia</a></li><li><a class=anchor-link target=_blank href=https://twitter.com/thespite>Jaume Sánchez</a></li></ul><br><span class=description>For making the world a better place to web developers.</span></div></div></section><!--SECTION CREDITS END -->

    <!-- SECTION SETTINGS START --><section id=settingsSection class="section-content section-settings"><div class=content-right><div class=content-info-settings><div class=content-subtitle>Generic</div><div class="rule left"></div><ul class=credits-list><li><span class=settings-name>Audio</span><span id=settingsAudioOn class="settings-toggle active">on</span><span id=settingsAudioOff class=settings-toggle>off</span></li><li id=fullscreenSettings><span class=settings-name>Fullscreen</span><span id=settingsFullscreenOn class=settings-toggle>on</span><span id=settingsFullscreenOff class="settings-toggle active">off</span></li></ul></div><div class=content-info-settings><div class=content-subtitle>Postprocessing</div><div class="rule left"></div><ul class=credits-list><li><span id=settingsQualityHigh class=settings-quality>High</span></li><li><span id=settingsQualityMedium class="settings-quality active">Medium</span></li><li><span id=settingsQualityLow class="settings-quality off">Low</span></li></ul></div><div class=content-info-settings><div class=content-subtitle>Anaglyph 3D</div><div class="rule left"></div><ul class=credits-list><li><span class=settings-name>stereo</span><span id=settingsStereoscopicOn class=settings-toggle>on</span><span id=settingsStereoscopicOff class="settings-toggle active">off</span></li><li><span class=settings-name>[red/cyan]</span></li></ul></div><div id=modelSettings class=content-info-settings><div class=content-subtitle>Scene</div><div class="rule left"></div><ul class=credits-list><li><span class="settings-name small-case">Zoom</span><input id=zoomBar type=range min=-2 max=2 value=0 step=0.1></li><li><span class="settings-name small-case">Auto rotation</span><input id=rotationBar type=range min=-2 max=2 value=0.5 step=0.1></li></ul></div><div class="content-subtitle low-performance-info small-case">If your browser is performing slow, change postprocessing quality to <a id=settingsQualityLowShortcut class=hover-anchor>low</a> or <a id=noWebglLaunch class=hover-anchor>click here</a> for a static version of this website.</div></div></section><!--SECTION SETTINGS END -->

    <!--SECTION GALEERY START --><section id=gallerySection class=section-gallery><div class=diagonal-overlay-right></div><div id=thumbContainer class=gallery-thumb-container><div class=thumb-wrapper><a data-model=1 class="gallery-thumb active"><span class=thumb-date>Frame.01</span></a> <a data-model=2 class=gallery-thumb><span class=thumb-date>Frame.02</span></a> <a data-model=3 class=gallery-thumb><span class=thumb-date>Frame.03</span></a> <a data-model=4 class=gallery-thumb><span class=thumb-date>Frame.04</span></a> <a data-model=5 class=gallery-thumb><span class=thumb-date>Frame.05</span></a> <a data-model=6 class=gallery-thumb><span class=thumb-date>Frame.06</span></a> <a data-model=7 class=gallery-thumb><span class=thumb-date>Frame.07</span></a> <a data-model=8 class=gallery-thumb><span class=thumb-date>Frame.08</span></a> <a data-model=9 class=gallery-thumb><span class=thumb-date>Frame.09</span></a></div><div id=thumbOverlay class="thumb-overlay pos1"></div></div><div id=touchSwipeInfo class=touch-swipe-info><div class=content-subtitle># Swipe screen to navigate</div></div><div id=galleryContainer class=gallery-item-container><ul><li class=gallery-item><div class=model-info-wrapper><picture class="model-background-img hide"><source media="(min-width: 500px)" srcset=/img/backgroundScene1HD.jpg><source srcset=/img/backgroundScene1SD.jpg><img src=/img/backgroundScene1HD.jpg class=model-background-img alt=""></picture><div class=diagonal-overlay-down></div><div class=diagonal-overlay-left></div><div class="section-content gallery-content"><div class=content-left><div class=content-title><span>Frame</span> <span class="frame-number highlight">1</span></div><div class=assets-info><div class=current-info><span class=settings-name>Date</span><span class=assets-label>20.02.15</span> <span class=settings-name>Assets Size</span><span class=assets-label>1.6Mb</span> <span class=settings-name>#polygons</span><span class=assets-label>2.926</span></div></div><div class=assets-info><div class="rule right"></div><div class=current-info><button data-model=1 data-assets=4 class="button button-load load-webgl">View</button> <button data-model=1 class="button button-load load-video">View</button></div></div></div></div></div></li><li class=gallery-item><div class=model-info-wrapper><picture class=model-background-img><source media="(min-width: 500px)" srcset=/img/backgroundScene2HD.jpg><source srcset=/img/backgroundScene2SD.jpg><img src=/img/backgroundScene2HD.jpg class=model-background-img alt=""></picture><div class=diagonal-overlay-down></div><div class=diagonal-overlay-left></div><div class="section-content gallery-content"><div class=content-left><div class=content-title><span>Frame</span> <span class="frame-number highlight">2</span></div><div class=assets-info><div class=current-info><span class=settings-name>Date</span><span class=assets-label>11.03.15</span> <span class=settings-name>Assets Size</span><span class=assets-label>3.4Mb</span> <span class=settings-name>#polygons</span><span class=assets-label>12.352</span></div></div><div class=assets-info><div class="rule right"></div><div class=current-info><button data-model=2 data-assets=6 class="button button-load load-webgl">View</button> <button data-model=2 class="button button-load load-video">View</button></div></div></div></div></div></li><li class=gallery-item><div class=model-info-wrapper><picture class=model-background-img><source media="(min-width: 500px)" srcset=/img/backgroundScene3HD.jpg><source srcset=/img/backgroundScene3SD.jpg><img src=/img/backgroundScene3HD.jpg class=model-background-img alt=""></picture><div class=diagonal-overlay-down></div><div class=diagonal-overlay-left></div><div class="section-content gallery-content"><div class=content-left><div class=content-title><span>Frame</span> <span class="frame-number highlight">3</span></div><div class=assets-info><div class=current-info><span class=settings-name>Date</span><span class=assets-label>13.03.15</span> <span class=settings-name>Assets Size</span><span class=assets-label>3.2Mb</span> <span class=settings-name>#polygons</span><span class=assets-label>12.790</span></div></div><div class=assets-info><div class="rule right"></div><div class=current-info><button data-model=3 data-assets=6 class="button button-load load-webgl">View</button> <button data-model=3 class="button button-load load-video">View</button></div></div></div></div></div></li><li class=gallery-item><div class=model-info-wrapper><picture class=model-background-img><source media="(min-width: 500px)" srcset=/img/backgroundScene4HD.jpg><source srcset=/img/backgroundScene4SD.jpg><img src=/img/backgroundScene4HD.jpg class=model-background-img alt=""></picture><div class=diagonal-overlay-down></div><div class=diagonal-overlay-left></div><div class="section-content gallery-content"><div class=content-left><div class=content-title><span>Frame</span> <span class="frame-number highlight">4</span></div><div class=assets-info><div class=current-info><span class=settings-name>Date</span><span class=assets-label>10.04.15</span> <span class=settings-name>Assets Size</span><span class=assets-label>1.7Mb</span> <span class=settings-name>#polygons</span><span class=assets-label>11.853</span></div></div><div class=assets-info><div class="rule right"></div><div class=current-info><button data-model=4 data-assets=21 class="button button-load load-webgl">View</button> <button data-model=4 class="button button-load load-video">View</button></div></div></div></div></div></li><li class=gallery-item><div class=model-info-wrapper><picture class=model-background-img><source media="(min-width: 500px)" srcset=/img/backgroundScene5HD.jpg><source srcset=/img/backgroundScene5SD.jpg><img src=/img/backgroundScene5HD.jpg class=model-background-img alt=""></picture><div class=diagonal-overlay-down></div><div class=diagonal-overlay-left></div><div class="section-content gallery-content"><div class=content-left><div class=content-title><span>Frame</span> <span class="frame-number highlight">5</span></div><div class=assets-info><div class=current-info><span class=settings-name>Date</span><span class=assets-label>25.04.15</span> <span class=settings-name>Assets Size</span><span class=assets-label>2.3Mb</span> <span class=settings-name>#polygons</span><span class=assets-label>11.631</span></div></div><div class=assets-info><div class="rule right"></div><div class=current-info><button data-model=5 data-assets=62 class="button button-load load-webgl">View</button> <button data-model=5 class="button button-load load-video">View</button></div></div></div></div></div></li><li class=gallery-item><div class=model-info-wrapper><picture class=model-background-img><source media="(min-width: 500px)" srcset=/img/backgroundScene6HD.jpg><source srcset=/img/backgroundScene6SD.jpg><img src=/img/backgroundScene6HD.jpg class=model-background-img alt=""></picture><div class=diagonal-overlay-down></div><div class=diagonal-overlay-left></div><div class="section-content gallery-content"><div class=content-left><div class=content-title><span>Frame</span> <span class="frame-number highlight">6</span></div><div class=assets-info><div class=current-info><span class=settings-name>Date</span><span class=assets-label>30.04.15</span> <span class=settings-name>Assets Size</span><span class=assets-label>2.9Mb</span> <span class=settings-name>#polygons</span><span class=assets-label>11.932</span></div></div><div class=assets-info><div class="rule right"></div><div class=current-info><button data-model=6 data-assets=7 class="button button-load load-webgl">View</button> <button data-model=6 class="button button-load load-video">View</button></div></div></div></div></div></li><li class=gallery-item><div class=model-info-wrapper><picture class=model-background-img><source media="(min-width: 500px)" srcset=/img/backgroundScene7HD.jpg><source srcset=/img/backgroundScene7SD.jpg><img src=/img/backgroundScene7HD.jpg class=model-background-img alt=""></picture><div class=diagonal-overlay-down></div><div class=diagonal-overlay-left></div><div class="section-content gallery-content"><div class=content-left><div class=content-title><span>Frame</span> <span class="frame-number highlight">7</span></div><div class=assets-info><div class=current-info><span class=settings-name>Date</span><span class=assets-label>01.05.15</span> <span class=settings-name>Assets Size</span><span class=assets-label>4.7Mb</span> <span class=settings-name>#polygons</span><span class=assets-label>23.896</span></div><div class="rule right"></div><div class=credits-subtitle>Head mesh and texture are courtesy of <a class=hover-anchor href="http://www.ten24.info/" target=_blank>Ten24</a>.</div></div><div class=assets-info><div class="rule right"></div><div class=current-info><button data-model=7 data-assets=4 class="button button-load load-webgl">View</button> <button data-model=7 class="button button-load load-video">View</button></div></div></div></div></div></li><li class=gallery-item><div class=model-info-wrapper><picture class=model-background-img><source media="(min-width: 500px)" srcset=/img/backgroundScene8HD.jpg><source srcset=/img/backgroundScene8SD.jpg><img src=/img/backgroundScene8HD.jpg class=model-background-img alt=""></picture><div class=diagonal-overlay-down></div><div class=diagonal-overlay-left></div><div class="section-content gallery-content"><div class=content-left><div class=content-title><span>Frame</span> <span class="frame-number highlight">8</span></div><div class=assets-info><div class=current-info><span class=settings-name>Date</span><span class=assets-label>08.05.15</span> <span class=settings-name>Assets Size</span><span class=assets-label>2.7Mb</span> <span class=settings-name>#polygons</span><span class=assets-label>10.992</span></div></div><div class=assets-info><div class="rule right"></div><div class=current-info><button data-model=8 data-assets=3 class="button button-load load-webgl">View</button> <button data-model=8 class="button button-load load-video">View</button></div></div></div></div></div></li><li class=gallery-item><div class=model-info-wrapper><picture class=model-background-img><source media="(min-width: 500px)" srcset=/img/backgroundScene9HD.jpg><source srcset=/img/backgroundScene9SD.jpg><img src=/img/backgroundScene9HD.jpg class=model-background-img alt=""></picture><div class=diagonal-overlay-down></div><div class=diagonal-overlay-left></div><div class="section-content gallery-content"><div class=content-left><div class=content-title><span>Frame</span> <span class="frame-number highlight">9</span></div><div class=assets-info><div class=current-info><span class=settings-name>Date</span><span class=assets-label>23.05.15</span> <span class=settings-name>Assets Size</span><span class=assets-label>2.8Mb</span> <span class=settings-name>#polygons</span><span class=assets-label>4.905</span></div></div><div class=assets-info><div class="rule right"></div><div class=current-info><button data-model=9 data-assets=3 class="button button-load load-webgl">View</button> <button data-model=9 class="button button-load load-video">View</button></div></div></div></div></div></li></ul></div></section><!--SECTION GALLERY END -->

    <!--FOOTER INFO START --><footer id=footerInfoSection class="footer-section-info hide"><div id=footerTitle class=footer-title># Drag the mouse to rotate scene</div><div id=shareSection class=share-section>share :: <a class=share-button href="https://twitter.com/share?url=http://rzr.io&text=A realtime rendered WebGL Experiment" title=Twitter target=_blank><i class="fa fa-twitter"></i></a> <a class=share-button href="https://www.facebook.com/sharer/sharer.php?u=http://rzr.io" title=facebook target=_blank><i class="fa fa-facebook"></i></a> <a class=share-button href="https://plus.google.com/share?url='http://rzr.io/'" title=googlePlus target=_blank><i class="fa fa-google-plus"></i></a> <a class=share-button href="http://www.linkedin.com/shareArticle?mini=true&url=http://rzr.io&title=Razormind Network&summary=A realtime decentralized internet ready for VR" title=LinkedIn target=_blank><i class="fa fa-linkedin"></i></a></div><div id=settingsAnchor class=menu-settings><div class=settings-label>:: <i id=audioIcon class="fa fa-volume-up" title=audio></i> :: settings</div><img id=settingsIcon class=settings-icon src=/img/settings.svg></div></footer><!--FOOTER INFO END --></div><!-- BODY WRAPPER END --><!-- SHADERS --><!--
         The following shaders are courtesy of Jaume Sanchez 
         http://www.clicktorelease.com/blog/creating-spherical-environment-mapping-shader
    --><script id=sem-vs type=x-shader/x-vertex>varying vec3 e;
        varying vec3 n;
        void main() {
            e = normalize(vec3(modelViewMatrix * vec4(position, 1.0)));
            n = normalize(normalMatrix * normal);
            gl_Position = projectionMatrix * modelViewMatrix * vec4(position, 1.);
        }</script><script id=sem-fs type=x-shader/x-vertex>uniform sampler2D tMatCap;
        varying vec3 e;
        varying vec3 n;
        void main() {
            vec3 r = reflect(e, n);
            float m = 2. * sqrt(pow(r.x, 2.) + pow(r.y, 2.) + pow(r.z + 1., 2.));
            vec2 vN = r.xy / m + .5;
            vec3 base = texture2D(tMatCap, vN).rgb;
            gl_FragColor = vec4(base, 1.);
        }</script><script type=x-shader/x-vertex id=vertexShader>attribute vec4 tangent;
        uniform float time;
        uniform vec2 repeat;
        uniform float useNormal;
        uniform float useRim;
        varying vec2 vUv;
        varying vec3 vTangent;
        varying vec3 vBinormal;
        varying vec3 vNormal;
        varying vec3 vEye;
        varying vec3 vU;
        varying vec2 vN;
        void main() {
            vU = normalize(vec3(modelViewMatrix * vec4(position, 1.0)));
            if(useNormal == 0.) {
                vec3 n = normalize(normalMatrix * normal);
                vec3 r = reflect(vU, n);
                float m = 2.0 * sqrt(r.x * r.x + r.y * r.y + (r.z + 1.0) * (r.z + 1.0));
                vN = vec2(r.x / m + 0.5, r.y / m + 0.5);
            } else {
                vN = vec2(0.);
            }
            vUv = repeat * uv;
            gl_Position = projectionMatrix * modelViewMatrix * vec4(position, 1.0);
            vNormal = normalize(normalMatrix * normal);
            if(useNormal == 1.) {
                vTangent = normalize(normalMatrix * tangent.xyz);
                vBinormal = normalize(cross(vNormal, vTangent) * tangent.w);
            } else {
                vTangent = vec3(0.);
                vBinormal = vec3(0.);
            }
            if(useRim > 0.) {
                vEye = (modelViewMatrix * vec4(position, 1.0)).xyz;
            } else {
                vEye = vec3(0.);
            }
        }</script><script type=x-shader/x-vertex id=fragmentShader>uniform float time;
        uniform float bump;
        uniform sampler2D tNormal;
        uniform sampler2D tMatCap;
        uniform float noise;
        uniform float useNormal;
        uniform float useRim;
        uniform float rimPower;
        uniform float useScreen;
        uniform float normalScale;
        uniform float normalRepeat;
        varying vec2 vUv;
        varying vec3 vTangent;
        varying vec3 vBinormal;
        varying vec3 vNormal;
        varying vec3 vEye;
        varying vec3 vU;
        varying vec2 vN;
        float random(vec3 scale, float seed) {
            return fract(sin(dot(gl_FragCoord.xyz + seed, scale)) * 43758.5453 + seed);
        }
        void main() {
            vec3 finalNormal = vNormal;
            vec2 calculatedNormal = vN;
            if(useNormal == 1.) {
                vec3 normalTex = texture2D(tNormal, vUv * normalRepeat).xyz * 2.0 - 1.0;
                normalTex.xy *= normalScale;
                normalTex.y *= -1.;
                normalTex = normalize(normalTex);
                mat3 tsb = mat3(normalize(vTangent), normalize(vBinormal), normalize(vNormal));
                finalNormal = tsb * normalTex;
                vec3 r = reflect(vU, normalize(finalNormal));
                float m = 2.0 * sqrt(r.x * r.x + r.y * r.y + (r.z + 1.0) * (r.z + 1.0));
                calculatedNormal = vec2(r.x / m + 0.5, r.y / m + 0.5);
            }
            vec3 base = texture2D(tMatCap, calculatedNormal).rgb;
            // rim lighting
            if(useRim > 0.) {
                float f = rimPower * abs(dot(vNormal, normalize(vEye)));
                f = useRim * (1. - smoothstep(0.0, 1., f));
                base += vec3(f);
            }
            // screen blending
            if(useScreen == 1.) {
                base = vec3(1.) - (vec3(1.) - base) * (vec3(1.) - base);
            }
            // noise 
            base += noise * (.5 - random(vec3(1.), length(gl_FragCoord)));
            gl_FragColor = vec4(base, 1.);
        }</script>
        <script type='text/javascript'> 
function attracta_loadjs(url) {
   (function() {
       var s = document.createElement('script');
       s.type = 'text/javascript';
       s.async = true;
       s.src = url;
       var x = document.getElementsByTagName('script')[0];
       x.parentNode.insertBefore(s, x);
   })();
}
function attracta_shouldrun() {
   var v = ["/admin/","/adm/","/wp-admin/","/administrator/"];
   for (x in v) if(window.location.pathname.indexOf(v[x]) == 0) return false;
   return true;
}
function attracta_window_width() {
   if (document.body && document.body.offsetWidth) return document.body.offsetWidth;
   if (document.compatMode=='CSS1Compat' && document.documentElement && document.documentElement.offsetWidth ) return document.documentElement.offsetWidth;
   if (window.innerWidth) return window.innerWidth;
   return 0;
}
function attracta_window_height() {
   if (document.body && document.body.offsetHeight) return document.body.offsetHeight;
   if (document.compatMode=='CSS1Compat' && document.documentElement && document.documentElement.offsetHeight ) return document.documentElement.offsetHeight;
   if (window.innerHeight) return window.innerHeight;
   return 0;
}
</script>


<!-- End Attracta Include 2015-06-19 20:56 -->

