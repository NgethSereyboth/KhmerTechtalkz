import { Controller } from "stimulus"

export default class extends Controller {

  openPopUpModal = e => {

    let target = e.target
    let articleRow = target.closest ('.admin-article-row')

    if (!articleRow) {
      return
    } 

    let articleTitle 
      = articleRow.querySelector ('.admin-article-title')
    let articleContent 
      = articleRow.querySelector ('.admin-article-content')
    let articleImage
      = articleRow.querySelector ('.admin-article-image')
    let modelPopUpTitle 
      = document.querySelector ('#pop-up-modal-title')
    let modelPopUpContent 
      = document.querySelector ('#pop-up-modal-content')

    switch (true) {

      case !articleTitle:
      case !articleContent:
      case !articleImage:
      case !modelPopUpTitle:
      case !modelPopUpContent:
        return

      default:
        break

    }

    modelPopUpTitle.innerHTML 
      = articleTitle.getAttribute ('data-title')

    let div = document.createElement ('img')
    div.src = articleImage.getAttribute ('data-image')
    div.classList.add ("img-fluid")

    modelPopUpContent.innerHTML 
      = articleContent.getAttribute ('data-content')

    modelPopUpContent.append (div)

  }

}