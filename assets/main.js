import './scripts/publicPath'
import 'console-polyfill'
import 'normalize.css/normalize.css'
import './main.scss'
import './scripts/scroll.js'
import $ from 'jquery'
import feather from 'feather-icons'
import smoothscroll from 'smoothscroll-polyfill'

import installCE from 'document-register-element/pony'

window.jQuery = $

window.lazySizesConfig = window.lazySizesConfig || {}
window.lazySizesConfig.preloadAfterLoad = true
require('lazysizes')

$(document).ready(function () {
  feather.replace({
    'stroke-width': 1
  })
})

installCE(window, {
  type: 'force',
  noBuiltIn: true
})

function importAll (r) {
  r.keys().forEach(r)
}

smoothscroll.polyfill()

importAll(require.context('../Components/', true, /\/script\.js$/))
require.resolve('./scripts/scroll.js')
