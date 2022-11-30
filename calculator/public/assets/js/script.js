//Generate by BABEL -:)
'use strict';

//DESIGN
//loading page: 
//en meme temps
//page blanche vers page noir
//iphone cocke noir vers iphone cocke blanche
//https://tympanus.net/codrops/2016/10/12/animated-decorative-lines/
(function () {

  var arrSign = ['-', '+', '/', '*', 'x'],
      arr = [],
      result = 0,
      printCalcul = '',
      arrSort = void 0,
      strSign = void 0,
      error = void 0,
      screen = document.querySelector('.screen span'),
      ele = document.querySelectorAll('.touche__box-item > span'),
      equal = document.querySelector('.sign-equal'),
      clear = document.querySelector('.clear-item  span');

  //operation
  for (var i = 0; i < ele.length; i++) {
    ele[i].addEventListener('click', function (e) {
      var cible = e.target.innerHTML === '_' ? cible = '-' : e.target.innerHTML;
      //on memorise dans le tableau
      arr.push(cible);
      //printCalcul display the screen
      printCalcul += cible;
      screen.innerHTML = printCalcul;
      e.preventDefault();
    });
  }
  clear.addEventListener('click', function (e) {
    screen.innerHTML = 'screen';
    arr.splice(0, arr.length);
    printCalcul = '';
    screen.classList.remove('error');
    e.preventDefault();
  });

  error = function error(strSignMessage) {
    screen.innerHTML = 'err with sign ' + strSignMessage;
    screen.classList.add('error');
  };

  equal.addEventListener('click', function (e) {
    result = 0;
    strSign = arr.join('');
    //return an array with the number together
    arrSort = strSign.match(/(\d+)|\D/g); //[ '4', '-', '94', '-', '8' ]
    for (var _i = 0, l = arrSort.length; _i < l; _i++) {
      var current = arrSort[_i],
          prev = arrSort[_i - 1],
          next = arrSort[_i + 1];
      prev = prev !== undefined && arrSign.indexOf(prev) === -1 ? parseInt(prev, 10) : '';
      next = next !== undefined && arrSign.indexOf(next) === -1 ? parseInt(next, 10) : '';
      //debugger
      //
      // if value current it's a sign: +-/*x 
      if (arrSign.indexOf(current) >= 0) {
        if (current === '+') {
          if (_i === 1) {
            //if is the first sign +-/* we're count the prev and next element
            result = prev + next;
            //console.log(result + ' : ' + i + ' : ' + arrSort[i] + ' : ' + arrSort[j] );
          } else if (_i > 1) {
            result += next;
            //console.log(result + ' : ' + i + ' : ' + arrSort[i+1]);
          } else if (_i === 0) {
            error('+');
            break;
          }
        }
        if (current === '-') {
          if (_i === 1) {
            //first sign +-/*
            result = prev - next;
            //console.log(result + ' - ' + ' : ' + i + ' : ' + arrSort[i] + ' : ' + arrSort[j] );
          } else if (_i > 1) {
            result -= next;
            //console.log(result + ' - ' +' : ' + i + ' : ' + arrSort[i+1]);
          } else if (_i === 0) {
            error('-');
            break;
          }
        }
        if (current === 'x') {
          if (_i === 1) {
            //first sign +-/*
            result += prev * next;
          } else if (_i > 1) {
            result *= next;
            //console.log(result + ' * ' +' : ' + i + ' : ' + arrSort[i+1]);
          } else if (_i === 0) {
            error('*');
            break;
          }
        }
        if (current === '/') {
          if (_i === 1) {
            //first sign +-/*
            result += prev / next;
          } else if (_i > 1) {
            result /= next;
          } else if (_i === 0) {
            error('/');
            break;
          }
        }
      }
    }
    if (!screen.classList.contains('error')) {
      screen.innerHTML = result;
    }
    e.preventDefault();
  }); //end click equal
})(); //END
//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNjcmlwdC5qcyJdLCJuYW1lcyI6WyJhcnJTaWduIiwiYXJyIiwicmVzdWx0IiwicHJpbnRDYWxjdWwiLCJhcnJTb3J0Iiwic3RyU2lnbiIsImVycm9yIiwic2NyZWVuIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwiZWxlIiwicXVlcnlTZWxlY3RvckFsbCIsImVxdWFsIiwiY2xlYXIiLCJpIiwibGVuZ3RoIiwiYWRkRXZlbnRMaXN0ZW5lciIsImUiLCJjaWJsZSIsInRhcmdldCIsImlubmVySFRNTCIsInB1c2giLCJwcmV2ZW50RGVmYXVsdCIsInNwbGljZSIsImNsYXNzTGlzdCIsInJlbW92ZSIsInN0clNpZ25NZXNzYWdlIiwiYWRkIiwiam9pbiIsIm1hdGNoIiwibCIsImN1cnJlbnQiLCJwcmV2IiwibmV4dCIsInVuZGVmaW5lZCIsImluZGV4T2YiLCJwYXJzZUludCIsImNvbnRhaW5zIl0sIm1hcHBpbmdzIjoiOztBQUFBO0FBQ0U7QUFDRTtBQUNFO0FBQ0E7QUFDTjtBQUNDLGFBQVc7O0FBRVYsTUFBSUEsVUFBUSxDQUFDLEdBQUQsRUFBSyxHQUFMLEVBQVMsR0FBVCxFQUFhLEdBQWIsRUFBaUIsR0FBakIsQ0FBWjtBQUFBLE1BQWtDQyxNQUFJLEVBQXRDO0FBQUEsTUFDRUMsU0FBTyxDQURUO0FBQUEsTUFDWUMsY0FBWSxFQUR4QjtBQUFBLE1BQzRCQyxnQkFENUI7QUFBQSxNQUNxQ0MsZ0JBRHJDO0FBQUEsTUFDOENDLGNBRDlDO0FBQUEsTUFFRUMsU0FBU0MsU0FBU0MsYUFBVCxDQUF1QixjQUF2QixDQUZYO0FBQUEsTUFHRUMsTUFBTUYsU0FBU0csZ0JBQVQsQ0FBMEIsMEJBQTFCLENBSFI7QUFBQSxNQUlFQyxRQUFRSixTQUFTQyxhQUFULENBQXVCLGFBQXZCLENBSlY7QUFBQSxNQUtFSSxRQUFRTCxTQUFTQyxhQUFULENBQXVCLG1CQUF2QixDQUxWOztBQU9BO0FBQ0EsT0FBSyxJQUFJSyxJQUFJLENBQWIsRUFBZ0JBLElBQUlKLElBQUlLLE1BQXhCLEVBQWdDRCxHQUFoQyxFQUFxQztBQUNuQ0osUUFBSUksQ0FBSixFQUFPRSxnQkFBUCxDQUF3QixPQUF4QixFQUFpQyxVQUFDQyxDQUFELEVBQU07QUFDckMsVUFBSUMsUUFBU0QsRUFBRUUsTUFBRixDQUFTQyxTQUFULEtBQXVCLEdBQXhCLEdBQStCRixRQUFNLEdBQXJDLEdBQTJDRCxFQUFFRSxNQUFGLENBQVNDLFNBQWhFO0FBQ0E7QUFDQW5CLFVBQUlvQixJQUFKLENBQVNILEtBQVQ7QUFDQTtBQUNBZixxQkFBZWUsS0FBZjtBQUNBWCxhQUFPYSxTQUFQLEdBQW1CakIsV0FBbkI7QUFDQWMsUUFBRUssY0FBRjtBQUNELEtBUkQ7QUFTRDtBQUNEVCxRQUFNRyxnQkFBTixDQUF1QixPQUF2QixFQUFnQyxVQUFDQyxDQUFELEVBQU87QUFDckNWLFdBQU9hLFNBQVAsR0FBbUIsUUFBbkI7QUFDQW5CLFFBQUlzQixNQUFKLENBQVcsQ0FBWCxFQUFhdEIsSUFBSWMsTUFBakI7QUFDQVosa0JBQWEsRUFBYjtBQUNBSSxXQUFPaUIsU0FBUCxDQUFpQkMsTUFBakIsQ0FBd0IsT0FBeEI7QUFDQVIsTUFBRUssY0FBRjtBQUNELEdBTkQ7O0FBUUFoQixVQUFRLGVBQUNvQixjQUFELEVBQW9CO0FBQzFCbkIsV0FBT2EsU0FBUCxHQUFtQixtQkFBbUJNLGNBQXRDO0FBQ0FuQixXQUFPaUIsU0FBUCxDQUFpQkcsR0FBakIsQ0FBcUIsT0FBckI7QUFDRCxHQUhEOztBQUtBZixRQUFNSSxnQkFBTixDQUF1QixPQUF2QixFQUFnQyxVQUFDQyxDQUFELEVBQU87QUFDckNmLGFBQVMsQ0FBVDtBQUNBRyxjQUFZSixJQUFJMkIsSUFBSixDQUFTLEVBQVQsQ0FBWjtBQUNBO0FBQ0F4QixjQUFVQyxRQUFRd0IsS0FBUixDQUFjLFdBQWQsQ0FBVixDQUpxQyxDQUlDO0FBQ3RDLFNBQUssSUFBSWYsS0FBSSxDQUFSLEVBQVdnQixJQUFJMUIsUUFBUVcsTUFBNUIsRUFBb0NELEtBQUlnQixDQUF4QyxFQUEyQ2hCLElBQTNDLEVBQWdEO0FBQzlDLFVBQUlpQixVQUFVM0IsUUFBUVUsRUFBUixDQUFkO0FBQUEsVUFBMEJrQixPQUFPNUIsUUFBUVUsS0FBRSxDQUFWLENBQWpDO0FBQUEsVUFBK0NtQixPQUFLN0IsUUFBUVUsS0FBRSxDQUFWLENBQXBEO0FBQ0FrQixhQUFRQSxTQUFTRSxTQUFULElBQXNCbEMsUUFBUW1DLE9BQVIsQ0FBZ0JILElBQWhCLE1BQTBCLENBQUMsQ0FBbEQsR0FBd0RJLFNBQVNKLElBQVQsRUFBYyxFQUFkLENBQXhELEdBQTRFLEVBQW5GO0FBQ0FDLGFBQVFBLFNBQVNDLFNBQVQsSUFBc0JsQyxRQUFRbUMsT0FBUixDQUFnQkYsSUFBaEIsTUFBMEIsQ0FBQyxDQUFsRCxHQUF3REcsU0FBU0gsSUFBVCxFQUFjLEVBQWQsQ0FBeEQsR0FBNEUsRUFBbkY7QUFDQTtBQUNBO0FBQ0E7QUFDQSxVQUFHakMsUUFBUW1DLE9BQVIsQ0FBZ0JKLE9BQWhCLEtBQTRCLENBQS9CLEVBQWtDO0FBQ2hDLFlBQUlBLFlBQVksR0FBaEIsRUFBcUI7QUFDbkIsY0FBSWpCLE9BQU0sQ0FBVixFQUFhO0FBQUM7QUFDWloscUJBQVM4QixPQUFPQyxJQUFoQjtBQUNBO0FBQ0QsV0FIRCxNQUdNLElBQUluQixLQUFJLENBQVIsRUFBVztBQUNmWixzQkFBVStCLElBQVY7QUFDQTtBQUNELFdBSEssTUFHQyxJQUFHbkIsT0FBTSxDQUFULEVBQVc7QUFDaEJSLGtCQUFNLEdBQU47QUFDQTtBQUNEO0FBQ0Y7QUFDRCxZQUFJeUIsWUFBWSxHQUFoQixFQUFxQjtBQUNuQixjQUFJakIsT0FBTSxDQUFWLEVBQWE7QUFBQztBQUNaWixxQkFBUzhCLE9BQU9DLElBQWhCO0FBQ0E7QUFDRCxXQUhELE1BR00sSUFBSW5CLEtBQUksQ0FBUixFQUFXO0FBQ2ZaLHNCQUFVK0IsSUFBVjtBQUNBO0FBQ0QsV0FISyxNQUdDLElBQUduQixPQUFNLENBQVQsRUFBVztBQUNoQlIsa0JBQU0sR0FBTjtBQUNBO0FBQ0Q7QUFDRjtBQUNELFlBQUl5QixZQUFZLEdBQWhCLEVBQXFCO0FBQ25CLGNBQUlqQixPQUFNLENBQVYsRUFBYTtBQUFDO0FBQ1paLHNCQUFVOEIsT0FBT0MsSUFBakI7QUFDRCxXQUZELE1BRU0sSUFBSW5CLEtBQUksQ0FBUixFQUFXO0FBQ2ZaLHNCQUFVK0IsSUFBVjtBQUNBO0FBQ0QsV0FISyxNQUdDLElBQUduQixPQUFNLENBQVQsRUFBVztBQUNoQlIsa0JBQU0sR0FBTjtBQUNBO0FBQ0Q7QUFDRjtBQUNELFlBQUl5QixZQUFZLEdBQWhCLEVBQXFCO0FBQ25CLGNBQUlqQixPQUFNLENBQVYsRUFBYTtBQUFDO0FBQ1paLHNCQUFVOEIsT0FBT0MsSUFBakI7QUFDRCxXQUZELE1BRU0sSUFBSW5CLEtBQUksQ0FBUixFQUFXO0FBQ2ZaLHNCQUFVK0IsSUFBVjtBQUNELFdBRkssTUFFQyxJQUFHbkIsT0FBTSxDQUFULEVBQVc7QUFDaEJSLGtCQUFNLEdBQU47QUFDQTtBQUNEO0FBQ0Y7QUFDRjtBQUVGO0FBQ0QsUUFBSSxDQUFDQyxPQUFPaUIsU0FBUCxDQUFpQmEsUUFBakIsQ0FBMEIsT0FBMUIsQ0FBTCxFQUF5QztBQUN2QzlCLGFBQU9hLFNBQVAsR0FBbUJsQixNQUFuQjtBQUNEO0FBQ0RlLE1BQUVLLGNBQUY7QUFDRCxHQWpFRCxFQWxDVSxDQW1HTjtBQUVMLENBckdBLEdBQUQsQyxDQXFHSyIsImZpbGUiOiJzY3JpcHQuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvL0RFU0lHTlxuICAvL2xvYWRpbmcgcGFnZTogXG4gICAgLy9lbiBtZW1lIHRlbXBzXG4gICAgICAvL3BhZ2UgYmxhbmNoZSB2ZXJzIHBhZ2Ugbm9pclxuICAgICAgLy9pcGhvbmUgY29ja2Ugbm9pciB2ZXJzIGlwaG9uZSBjb2NrZSBibGFuY2hlXG4vL2h0dHA6Ly90eW1wYW51cy5uZXQvY29kcm9wcy8yMDE2LzEwLzEyL2FuaW1hdGVkLWRlY29yYXRpdmUtbGluZXMvXG4oZnVuY3Rpb24oKSB7XG5cbiAgbGV0IGFyclNpZ249WyctJywnKycsJy8nLCcqJywneCddLGFycj1bXSwgXG4gICAgcmVzdWx0PTAsIHByaW50Q2FsY3VsPScnLCBhcnJTb3J0LCBzdHJTaWduLCBlcnJvcixcbiAgICBzY3JlZW4gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcuc2NyZWVuIHNwYW4nKSxcbiAgICBlbGUgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcudG91Y2hlX19ib3gtaXRlbSA+IHNwYW4nKSwgXG4gICAgZXF1YWwgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcuc2lnbi1lcXVhbCcpLFxuICAgIGNsZWFyID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLmNsZWFyLWl0ZW0gIHNwYW4nKVxuXG4gIC8vb3BlcmF0aW9uXG4gIGZvciAobGV0IGkgPSAwOyBpIDwgZWxlLmxlbmd0aDsgaSsrKSB7XG4gICAgZWxlW2ldLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgKGUpID0+e1xuICAgICAgbGV0IGNpYmxlID0gKGUudGFyZ2V0LmlubmVySFRNTCA9PT0gJ18nKSA/IGNpYmxlPSctJyA6IGUudGFyZ2V0LmlubmVySFRNTCBcbiAgICAgIC8vb24gbWVtb3Jpc2UgZGFucyBsZSB0YWJsZWF1XG4gICAgICBhcnIucHVzaChjaWJsZSlcbiAgICAgIC8vcHJpbnRDYWxjdWwgZGlzcGxheSB0aGUgc2NyZWVuXG4gICAgICBwcmludENhbGN1bCArPSBjaWJsZVxuICAgICAgc2NyZWVuLmlubmVySFRNTCA9IHByaW50Q2FsY3VsXG4gICAgICBlLnByZXZlbnREZWZhdWx0KCk7XG4gICAgfSk7XG4gIH1cbiAgY2xlYXIuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoZSkgPT4ge1xuICAgIHNjcmVlbi5pbm5lckhUTUwgPSAnc2NyZWVuJ1xuICAgIGFyci5zcGxpY2UoMCxhcnIubGVuZ3RoKVxuICAgIHByaW50Q2FsY3VsID0nJ1xuICAgIHNjcmVlbi5jbGFzc0xpc3QucmVtb3ZlKCdlcnJvcicpXG4gICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xuICB9KTtcblxuICBlcnJvciA9IChzdHJTaWduTWVzc2FnZSkgPT4ge1xuICAgIHNjcmVlbi5pbm5lckhUTUwgPSAnZXJyIHdpdGggc2lnbiAnICsgc3RyU2lnbk1lc3NhZ2UgXG4gICAgc2NyZWVuLmNsYXNzTGlzdC5hZGQoJ2Vycm9yJylcbiAgfVxuICBcbiAgZXF1YWwuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoZSkgPT4ge1xuICAgIHJlc3VsdCA9IDBcbiAgICBzdHJTaWduICAgPSBhcnIuam9pbignJylcbiAgICAvL3JldHVybiBhbiBhcnJheSB3aXRoIHRoZSBudW1iZXIgdG9nZXRoZXJcbiAgICBhcnJTb3J0ID0gc3RyU2lnbi5tYXRjaCgvKFxcZCspfFxcRC9nKTsgLy9bICc0JywgJy0nLCAnOTQnLCAnLScsICc4JyBdXG4gICAgZm9yIChsZXQgaSA9IDAsIGwgPSBhcnJTb3J0Lmxlbmd0aDsgaSA8IGw7IGkrKykge1xuICAgICAgbGV0IGN1cnJlbnQgPSBhcnJTb3J0W2ldLCBwcmV2ID0gYXJyU29ydFtpLTFdLCBuZXh0PWFyclNvcnRbaSsxXTtcbiAgICAgIHByZXYgPSAocHJldiAhPT0gdW5kZWZpbmVkICYmIGFyclNpZ24uaW5kZXhPZihwcmV2KSA9PT0gLTEgKSA/IHBhcnNlSW50KHByZXYsMTApIDogJydcbiAgICAgIG5leHQgPSAobmV4dCAhPT0gdW5kZWZpbmVkICYmIGFyclNpZ24uaW5kZXhPZihuZXh0KSA9PT0gLTEgKSA/IHBhcnNlSW50KG5leHQsMTApIDogJydcbiAgICAgIC8vZGVidWdnZXJcbiAgICAgIC8vXG4gICAgICAvLyBpZiB2YWx1ZSBjdXJyZW50IGl0J3MgYSBzaWduOiArLS8qeCBcbiAgICAgIGlmKGFyclNpZ24uaW5kZXhPZihjdXJyZW50KSA+PSAwKSB7XG4gICAgICAgIGlmIChjdXJyZW50ID09PSAnKycpIHtcbiAgICAgICAgICBpZiAoaSA9PT0gMSkgey8vaWYgaXMgdGhlIGZpcnN0IHNpZ24gKy0vKiB3ZSdyZSBjb3VudCB0aGUgcHJldiBhbmQgbmV4dCBlbGVtZW50XG4gICAgICAgICAgICByZXN1bHQgPSBwcmV2ICsgbmV4dFxuICAgICAgICAgICAgLy9jb25zb2xlLmxvZyhyZXN1bHQgKyAnIDogJyArIGkgKyAnIDogJyArIGFyclNvcnRbaV0gKyAnIDogJyArIGFyclNvcnRbal0gKTtcbiAgICAgICAgICB9ZWxzZSBpZiAoaSA+IDEpIHtcbiAgICAgICAgICAgIHJlc3VsdCArPSBuZXh0IFxuICAgICAgICAgICAgLy9jb25zb2xlLmxvZyhyZXN1bHQgKyAnIDogJyArIGkgKyAnIDogJyArIGFyclNvcnRbaSsxXSk7XG4gICAgICAgICAgfSBlbHNlIGlmKGkgPT09IDApe1xuICAgICAgICAgICAgZXJyb3IoJysnKVxuICAgICAgICAgICAgYnJlYWtcbiAgICAgICAgICB9IFxuICAgICAgICB9XG4gICAgICAgIGlmIChjdXJyZW50ID09PSAnLScpIHtcbiAgICAgICAgICBpZiAoaSA9PT0gMSkgey8vZmlyc3Qgc2lnbiArLS8qXG4gICAgICAgICAgICByZXN1bHQgPSBwcmV2IC0gbmV4dFxuICAgICAgICAgICAgLy9jb25zb2xlLmxvZyhyZXN1bHQgKyAnIC0gJyArICcgOiAnICsgaSArICcgOiAnICsgYXJyU29ydFtpXSArICcgOiAnICsgYXJyU29ydFtqXSApO1xuICAgICAgICAgIH1lbHNlIGlmIChpID4gMSkge1xuICAgICAgICAgICAgcmVzdWx0IC09IG5leHQgXG4gICAgICAgICAgICAvL2NvbnNvbGUubG9nKHJlc3VsdCArICcgLSAnICsnIDogJyArIGkgKyAnIDogJyArIGFyclNvcnRbaSsxXSk7XG4gICAgICAgICAgfSBlbHNlIGlmKGkgPT09IDApe1xuICAgICAgICAgICAgZXJyb3IoJy0nKVxuICAgICAgICAgICAgYnJlYWtcbiAgICAgICAgICB9IFxuICAgICAgICB9XG4gICAgICAgIGlmIChjdXJyZW50ID09PSAneCcpIHtcbiAgICAgICAgICBpZiAoaSA9PT0gMSkgey8vZmlyc3Qgc2lnbiArLS8qXG4gICAgICAgICAgICByZXN1bHQgKz0gcHJldiAqIG5leHRcbiAgICAgICAgICB9ZWxzZSBpZiAoaSA+IDEpIHtcbiAgICAgICAgICAgIHJlc3VsdCAqPSBuZXh0IFxuICAgICAgICAgICAgLy9jb25zb2xlLmxvZyhyZXN1bHQgKyAnICogJyArJyA6ICcgKyBpICsgJyA6ICcgKyBhcnJTb3J0W2krMV0pO1xuICAgICAgICAgIH0gZWxzZSBpZihpID09PSAwKXtcbiAgICAgICAgICAgIGVycm9yKCcqJylcbiAgICAgICAgICAgIGJyZWFrXG4gICAgICAgICAgfSBcbiAgICAgICAgfVxuICAgICAgICBpZiAoY3VycmVudCA9PT0gJy8nKSB7XG4gICAgICAgICAgaWYgKGkgPT09IDEpIHsvL2ZpcnN0IHNpZ24gKy0vKlxuICAgICAgICAgICAgcmVzdWx0ICs9IHByZXYgLyBuZXh0XG4gICAgICAgICAgfWVsc2UgaWYgKGkgPiAxKSB7XG4gICAgICAgICAgICByZXN1bHQgLz0gbmV4dCBcbiAgICAgICAgICB9IGVsc2UgaWYoaSA9PT0gMCl7XG4gICAgICAgICAgICBlcnJvcignLycpXG4gICAgICAgICAgICBicmVha1xuICAgICAgICAgIH0gXG4gICAgICAgIH1cbiAgICAgIH0gXG5cbiAgICB9XG4gICAgaWYgKCFzY3JlZW4uY2xhc3NMaXN0LmNvbnRhaW5zKCdlcnJvcicpKSB7XG4gICAgICBzY3JlZW4uaW5uZXJIVE1MID0gcmVzdWx0IFxuICAgIH0gXG4gICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xuICB9KTsgLy9lbmQgY2xpY2sgZXF1YWxcblxufSgpKTsvL0VORFxuIl0sInNvdXJjZVJvb3QiOiIvc291cmNlLyJ9