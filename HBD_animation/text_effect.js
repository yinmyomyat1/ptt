var app = document.getElementById('app');

var typewriter = new Typewriter(app, {
    loop: true
});


typewriter.typeString('Click the <strong>Gift Box</strong> to open')
    .pauseFor(2500)
    .deleteAll()
    
    .start();


