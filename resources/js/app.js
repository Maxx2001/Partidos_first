require('./bootstrap')
var Turbolinks = require("turbolinks")
document.addEventListener("livewire:load", function(event) {
    turbolinks.start();
});
