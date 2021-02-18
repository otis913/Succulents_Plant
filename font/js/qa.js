$(document).ready(function() {
    $(".qa").click(function(){
        $(".qa").hide();
        $(".qaBg").show();
    })
    $(".question").click(function(){
        $(".ans").toggle();      
    })
    $(".question1").click(function(){
        $(".ans1").toggle();      
    })
    $(".question2").click(function(){
        $(".ans2").toggle();      
    })
    $(".question3").click(function(){
        $(".ans3").toggle();      
    })
    $(".question4").click(function(){
        $(".ans4").toggle();      
    })
    $(".btn").click(function(){
        $(".answer").show();      
    })
    $("input").keypress(function(e){
        if(e.which == 13){
            $(".answer").show();
            // alert('aaaa')      
        }
       
    })
    $(".cancel").click(function(){
        $(".qaBg").hide();      
    })

})
//vue
var app =new Vue({
    el:"#app",
    data:{
        message:'why did you so late?',
    },
    methods:{
        
    }
})