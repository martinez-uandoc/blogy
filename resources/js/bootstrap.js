import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';



import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;

import $ from "jquery";
import "datatables.net";
import "datatables.net-bs5";


import 'summernote/dist/summernote-lite.css';
import 'summernote/dist/summernote-lite.js';


import 'remixicon/fonts/remixicon.css';

window.$ = window.jQuery = $;