//script pour egmounter le valeur de width de div progress
//  qaund on scroll sur section objectifs
let progTexts = document.querySelectorAll(".progText")
let objSection = document.getElementById("objSection")
let ProgSpans = document.querySelectorAll(".progresse span")

window.onscroll = function () {
    if (window.scrollY >= objSection.offsetTop -150) {
        ProgSpans.forEach((span) => {

            span.style.width = span.dataset.width
            progTexts.forEach((progText) => {
                progText.style.display = "block"
            })
        })

    }


}



