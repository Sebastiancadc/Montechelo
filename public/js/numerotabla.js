var addNumeration = function(cl){
    var table = document.querySelector('table.' + cl)
    var trs = table.querySelectorAll('tr')
    var counter = 1
    
    Array.prototype.forEach.call(trs, function(x,i){
      var firstChild = x.children[0]
      if (firstChild.tagName === 'TD') {
        var cell = document.createElement('td')
        cell.textContent = counter ++
        x.insertBefore(cell,firstChild)
      } else {
        firstChild.setAttribute('colspan',2)
      }
    })
  }
  addNumeration("test")