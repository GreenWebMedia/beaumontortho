const route = '//beaumontortho.com/wp-json'

const api = () => {
  return document.location.hostname === 'localhost' || document.location.href.indexOf('roostertest3') > -1 ? route : document.location.protocol + '/wp-json'
}

export default api()
