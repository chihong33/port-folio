
require('./bootstrap');
require('./components/projectModal');


import Alpine from 'alpinejs';

window.$ = window.jQuery = require('jquery')

window.inView = require('in-view')

window.Alpine = Alpine;

Alpine.start();