<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Project 2 - Page 1</title>
</head>
<body>
        <main class="pageMain">
        <div class="header">
        <?php require 'inc/header.inc.php'; ?>
        <h2 >Welcome to your custom menu designing tool</h2>
        <p>So many choices to make this event your own!</p>
        </div>
        <div class="form">
                <form action="page2.php" method="GET">
                <fieldset class="menuTitleOption">
                <p class="formNote">Something funny or meaningful? It's your choice!</p>
                <legend class="formTitle">Enter your menu title!</legend>
                <input  type="text" 
                        name="menutitle"
                        id="menutitle"
                        value=" "
                        title="Enter a menu name"
                        size="60">
                <p class="formDirection">Add the URL query parameter as follows:</p>
                <ul class="list">
                        <li>?menutitle=</li>
                </ul>
                </fieldset>

                <fieldset class="backgroundOption">
                <legend class="formTitle">Choose a background color!</legend>
                <input  type="radio"
                        name="bgcolor"
                        id="darkblue"
                        value="darkblue"
                        title="Select a color">
                <label  for="darkblue">Dark Blue</label>
                <input  type="radio"
                        name="bgcolor"
                        id="darkgrey"
                        value="darkgrey"
                        title="Select a color">
                <label  for="darkgrey">Dark Grey</label>
                <input  type="radio"
                        name="bgcolor"
                        id="steelblue"
                        value="steelblue"
                        title="Select a color">
                <label  for="steelblue">Steel Blue</label>
                <input  type="radio"
                        name="bgcolor"
                        id="mintgreen"
                        value="mintgreen"
                        title="Select a color">
                <label  for="mintgreen">Mint Green</label>
                <input  type="radio"
                        name="bgcolor"
                        id="violet"
                        value="violet"
                        title="Select a color">
                <label  for="violet">Violet</label>
                <input  type="radio"
                        name="bgcolor"
                        id="tan"
                        value="tan"
                        title="Select a color">
                <label  for="tan">Tan</label>
                <input  type="radio"
                        name="bgcolor"
                        id="black"
                        value="black"
                        title="Select a color">
                <label  for="black">Black</label>
                <p class="formDirection">Add the URL query parameter as follows:</p>
                <ul class="list">
                        <li>?bgcolor=darkblue</li>
                        <li>?bgcolor=darkgrey</li>
                        <li>?bgcolor=steelblue</li>
                        <li>?bgcolor=mintgreen</li>
                        <li>?bgcolor=purple</li>
                        <li>?bgcolor=tan</li>
                        <li>?bgcolor=black</li>
                </ul>
                </fieldset>    

                <fieldset class="fontOption">
                <legend class="formTitle">Choose your font color</legend>
                <input  type="radio" 
                        name="font" 
                        id="coal" 
                        value="coal" 
                        title="Select a color" /> 
                <label  for="coal">Coal</label>
                <input  type="radio" 
                        name="font" 
                        id="silver" 
                        value="silver" 
                        title="Select a color" /> 
                <label  for="silver">Silver</label>
                <input  type="radio" 
                        name="font" 
                        id="purple" 
                        value="purple" 
                        title="Select a color" /> 
                <label  for="purple">Purple</label>
                <input  type="radio" 
                        name="font" 
                        id="blue" 
                        value="blue" 
                        title="Select a color" /> 
                <label  for="blue">Blue</label>
                <input  type="radio" 
                        name="font" 
                        id="orange" 
                        value="orange" 
                        title="Select a color" /> 
                <label  for="orange">Orange</label>
                <p class="formDirection">Add the URL query parameter as follows:</p>
                <ul class="list">
                        <li>?font=coal</li>
                        <li>?font=silver</li>
                        <li>?font=purple</li>
                        <li>?font=blue</li>
                        <li>?font=orange</li>
                </ul>
                </fieldset>

                <fieldset class="pictureOption">
                <legend class="formTitle">Would you like pictures on your menu?</legend>
                <input  type="radio"
                        name="pictures1" 
                        id="display" 
                        value="yes" 
                        title="Select display pictures" /> 
                <label  for="display">Display Menu Pictures</label>
                <input  type="radio" 
                        name="pictures1" 
                        id="nodisplay" 
                        value="no" 
                        title="Select do not display pictures" /> 
                <label  for="nodisplay">Do Not Display Menu Pictures</label>
                <p class="formDirection">Add the URL query parameter as follows:</p>
                <ul class="list">
                        <li>?pictures1=no</li>
                        <li>?pictures1=yes</li>
                </ul>
        </fieldset>

        <fieldset class="borderOption">
        <legend class="formTitle">Would you like a border on your menu?</legend>
                <p class="formNote">By default, if you choose a border it will be the same color as your chosen font. Other options are available on demand.</p>
                <input  type="radio"
                        name="border"
                        id="none"
                        value="none"
                        title="Select no border" />
                <label  for="none">No Border</label>
                <input  type="radio"
                        name="border"
                        id="solid"
                        value="solid"
                        title="Select a solid border" />
                <label  for="solid">Solid Border</label>
                <input  type="radio"
                        name="border"
                        id="double"
                        value="double"
                        title="Select a decorative border"/>
                <label  for="double">Double Border</label>
                <p class="formDirection">Add the URL query parameter as follows:</p>
                <ul class="list">
                        <li>?border=none</li>
                        <li>?border=solid</li>
                        <li>?border=double</li>
                </ul>
                
        </fieldset>

        <fieldset class="requests">
        <legend class="formTitle">Special Requests</legend>
                <p class="formNote">All the above are our traditional options, but more are available upon request. If you have a color combination you prefer or any other request, please note it here.</p>
                <textarea       id="request" 
                                name="request"
                                cols="60"
                                rows="4"></textarea>
                <p class="formDirection">Add the URL query parameter as follows:</p>
                <ul class="list">
                        <li>?request=</li>
                </ul>
        </fieldset>

        <fieldset class="submit">
        <legend class="formTitle">Submit Menu Requests</legend>
                <input  type="submit" name="submit" value="submit">
        </fieldset>
        </form>

    </div>
    <div class="footer">
    <?php require "inc/footer.inc.php"; ?>
    </div>
    </main>
</body>
</html>