export function relativePath (value) {
  const apiRoot = 'http://mastroianni.roostertest3.com'
  return value.replace(apiRoot, '')
}

export function formatPhone (value) {
  return value.replace(/[^0-9]/g, '')
              .replace(/(\d{3})(\d{3})(\d{4})/, '($1) $2-$3')
}
