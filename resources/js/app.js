import './bootstrap';
import $ from 'jquery';

window.$ = $;

import Alpine from 'alpinejs';

window.Alpine = Alpine;

import dropdown from './dropdown';
import notification from './components/notification';

import Toastify from 'toastify-js'
import "toastify-js/src/toastify.css"

window.Toastify = Toastify;


Alpine.data('notification', notification);
Alpine.data('dropdown', dropdown);
Alpine.start();

import 'dropify';

$('.dropify').dropify();


