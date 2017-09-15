window.$ = window.jQuery = require('jquery');

require('bootstrap-sass');

// Bootstrap Confirmation
require('bootstrap-confirmation2/bootstrap-confirmation.min');

// AngularJS
require('angular/angular');
require('angular-resource/angular-resource');
require('angular-ui-router/release/angular-ui-router');
require('angular-translate/dist/angular-translate');
require('angular-translate-loader-url/angular-translate-loader-url');
require('angular-animate/angular-animate');
require('angular-touch/angular-touch');
require('angular-ui-bootstrap/');
require('angular-sanitize/angular-sanitize');
require('angular-bootstrap-confirm/dist/angular-bootstrap-confirm');
require('angular-jwt/');

// Application JavaScript.
require('./thinkblog');
require('./app/thinkblogApp.module');
require('./app/thinkblogApp.config');
require('./app/core/');
require('./app/post-list/');
require('./app/post-view/');
