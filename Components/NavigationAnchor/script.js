import $ from 'jquery'

class NavigationAnchor extends window.HTMLElement {
  constructor (...args) {
    const self = super(...args)
    self.init()
    return self
  }

  init () {
    this.$ = $(this)
    this.resolveElements()
    this.bindFunctions()
    this.bindEvents()
  }

  resolveElements () {
    this.$buttonSubmenu = $('.submenu-toggle', this)
    this.$submenu = $('.list-container', this)
  }

  bindFunctions () {
    this.toggleSubmenu = this.toggleSubmenu.bind(this)
  }

  bindEvents () {
    this.$buttonSubmenu.on('click', this.toggleSubmenu)
  }

  toggleSubmenu (e) {
    this.$submenu.slideToggle('fast')
  }
}

window.customElements.define('flynt-navigation-anchor', NavigationAnchor, { extends: 'div' })
