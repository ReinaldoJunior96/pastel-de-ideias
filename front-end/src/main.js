import { createApp } from 'vue'
import App from './App.vue'
import store from './store/index.js'
import './assets/css/style.css'
import 'animate.css';

createApp(App).use(store).mount('#app')
