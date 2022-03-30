$(document).ready(function(){

    $('#btnSearchById').click(function(){
        $('#filter_form').toggleClass("hidden");
        $('#insert_form').addClass("hidden");
        $('#insert_intervention_form').addClass("hidden");
    });

    $('#btnInsertCostumer').click(function(){
        $('#insert_form').toggleClass("hidden");
        $('#filter_form').addClass("hidden");
        $('#insert_intervention_form').addClass("hidden");
    });

    $('#btnInsertIntervention').click(function(){
        $('#insert_intervention_form').toggleClass("hidden");
        $('#filter_form').addClass("hidden");
        $('#insert_form').addClass("hidden");
    });

    $('#dialog').addClass('hidden');
    $('#consumerDelete').click(function() {
        $('#dialog').removeClass('hidden');
    });
    $('#consumerDeleteQuit').click(function(){
        $('#dialog').addClass('hidden');
    });

});
