<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="icon" href="%PUBLIC_URL%/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta
      name="description"
      content="Web site created using create-react-app"
    />
    <link rel="apple-touch-icon" href="%PUBLIC_URL%/logo192.png" />
    <!--
      manifest.json provides metadata used when your web app is installed on a
      user's mobile device or desktop. See https://developers.google.com/web/fundamentals/web-app-manifest/
    -->
    <link rel="manifest" href="%PUBLIC_URL%/manifest.json" />
    <!--
      Notice the use of %PUBLIC_URL% in the tags above.
      It will be replaced with the URL of the `public` folder during the build.
      Only files inside the `public` folder can be referenced from the HTML.
      Unlike "/favicon.ico" or "favicon.ico", "%PUBLIC_URL%/favicon.ico" will
      work correctly both with client-side routing and a non-root public URL.
      Learn how to configure a non-root public URL by running `npm run build`.
    -->
    <title>PitHub by CodeSquad</title>
      
        <link rel="stylesheet" href="css/flexbox.css">
        <link rel="stylesheet" href="css/menu.css">
     
  </head>
  <body>
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root"></div>
    <!--
      This HTML file is a template.
      If you open it directly in the browser, you will see an empty page.
      You can add webfonts, meta tags, or analytics to this file.
      The build step will place the bundled scripts into the <body> tag.
      To begin the development, run `npm start` or `yarn start`.
      To create a production bundle, use `npm run build` or `yarn build`.
    -->
      
<!-- header and menu goes here pull -->
        <?php 
// index.php file
include 'header.html';
      
<!-- //END header and menu pull -->  
      
        <h1 class="viewport-header">
           <img src="img/BecomeaPIT-TER.png" style="margin-left: 25px;margin-top: 0px">
            <span></span>
        </h1>
        
        <!--hero video retrived from online tutorial https://css-tricks.com/full-page-background-video-styles/ 02/18/2022-->
        <video playsinline autoplay muted loop poster="polina.jpg" id="bgvid">
            <!--<source src="polina.webm" type="video/webm">-->
            <source src="https://www.dezineomni.com/matraxstyle_homepage_video.mp4" type="video/mp4">
        </video>
        <!--END/ hero video-->

       
    <!-- footer here-->
      <?php 
// index.php file
include 'footer.html';
      <!-- //END footer here -->
      
  </body>
</html>
