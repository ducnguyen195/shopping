$(document).ready(function (){
    let scrollBar = document.getElementById('scroll_bar');
    $(window).on('scroll',function(){
        console.log('roll')
        if(document.documentElement.scrollTop > 100) {
            scrollBar.classList.remove('hidden');
            scrollBar.classList.add('visible');
        } else {
            scrollBar.classList.remove('visible');
            scrollBar.classList.add('hidden');
        }

    })
});
