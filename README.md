# Web Kiosk PDF viewer ([Demo](https://www.alessandroscola.com/web-kiosk-pdf-viewer/))

This project allows to easly view **PDF documents** in a web page.
The interface is designed for a **Kiosk interface** as touch screens. No keyboard required.

[![Web Kiosk with Raspberry Pi 4](https://img.youtube.com/vi/4O5nr4Ld83Q/0.jpg)](https://www.youtube.com/watch?v=4O5nr4Ld83Q)

[![Visualizzare Documewnti PDF con HTML5](https://img.youtube.com/vi/gUJjULlm_W8/0.jpg)](https://youtu.be/gUJjULlm_W8)


You can use a normal web broser or ..
you can use a __touch screen monitor__ and easly do this operations:
* **type** a filename with the _Javascript Touch Keyboard_ and search for it
* **pinch to zoom** _IN_ and _OUT_ the document
* **scroll** the document in all directions
* **rotate** the document


## Technology:

* HTML
* CSS
* Javascript
* PHP

The magic is done by the [PDF.js](https://github.com/mozilla/pdf.js) project, that trasforms PDF document into HTML5 object. 
I used this library and merged into a responsive webpage to easly find documents.
I also added a really cool [Javascript KEYBOARD](https://github.com/Mottie/Keyboard)
## Usage
Edit **config.php**
```php
<?php
// BASE URL OF THE SITE
define('CONFIG_BASE_URL', 'http://localhost/web-kiosk-pdf-viewer-main');
$HOME=CONFIG_BASE_URL;
?>
```
change **CONFIG_BASE_URL** to match your site installation

Put your PDF files into the **PDF_FILES** folder or map that folder to another file server.


## Live Demo:

Try a live working demo [here](https://www.alessandroscola.com/web-kiosk-pdf-viewer/)
## Youtube Demo:

Watch how it works [here](https://www.youtube.com/watch?v=4O5nr4Ld83Q)

## Other Resources:
My [**blog article regarding this project**](https://www.alessandroscola.com/software/visualizzare-pdf-con-html5.html) (italian version)

Read also my article:

[**how to build a Web kiosk with Raspberry Pi 4**](https://www.alessandroscola.com/en/computers/create-a-web-multimedia-kiosk-with-raspberry.html) (English version)

[**how to build a Web kiosk with Raspberry Pi 4**](https://www.alessandroscola.com/computer/chiosco-multimediale-web-con-raspberry.html) (Italian version)


## License
Apache 2.0
 
