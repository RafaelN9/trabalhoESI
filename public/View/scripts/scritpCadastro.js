$(document).ready(function(){
$("#cadastroAluno").click(function(){

    zeraEventListener("#formAluno");

    $("#cadastroAluno").addClass('active'); 
    $("#cadastroProf").removeClass('active'); 
    $("#cadastroCCP").removeClass('active'); 

    $("#formAluno").removeClass('d-none'); 
    $("#formAluno").addClass('d-flex'); 

    $("#formProfessor").removeClass('d-flex'); 
    $("#formProfessor").addClass('d-none');

    $("#formCCP").removeClass('d-flex');  
    $("#formCCP").addClass('d-none'); 

    document.querySelector("#formAluno").querySelector("#confirmaSenha").addEventListener('keyup', validaSenhas);
});

$("#cadastroProf").click(function(){

    zeraEventListener("#formAluno");

    $("#cadastroProf").addClass('active'); 
    $("#cadastroAluno").removeClass('active'); 
    $("#cadastroCCP").removeClass('active');

    $("#formAluno").removeClass('d-flex'); 
    $("#formAluno").addClass('d-none'); 
    
    $("#formProfessor").removeClass('d-none'); 
    $("#formProfessor").addClass('d-flex');

    $("#formCCP").removeClass('d-flex');  
    $("#formCCP").addClass('d-none'); 

    document.querySelector("#formProfessor").querySelector("#confirmaSenha").addEventListener('keyup', validaSenhas);

});

$("#cadastroCCP").click(function(){
    $("#cadastroCCP").addClass('active'); 
    $("#cadastroProf").removeClass('active'); 
    $("#cadastroAluno").removeClass('active');

    $("#formAluno").removeClass('d-flex'); 
    $("#formAluno").addClass('d-none'); 
    
    $("#formProfessor").removeClass('d-flex'); 
    $("#formProfessor").addClass('d-none');

    $("#formCCP").removeClass('d-none');  
    $("#formCCP").addClass('d-flex'); 
});

    let options = {
        translation: {
            "@": { pattern: /[a-zÀ-ÿA-Z ]/, recursive: true },
            E: { pattern: /[\w@\-.+]/, recursive: true },
            A: { pattern: /[\w@\-.+]/, optional: false },
            S: { pattern: /[\w@\-.+]/, optional: true },
        },
    };

    $("#cadastroNome").mask("@", options);
    $("#cadastroEmail").mask("E", options);
    $('#cadastroCPF').mask('000.000.000-00', {reverse: true});
    $("#cadastroSenha").mask("AAAAAAAASSSSSSSS", options);
    $("#cadastroNumUsp").mask("#");

    $("#cadastroNomeProf").mask("@", options);
    $("#cadastroEmailProf").mask("E", options);
    $('#cadastroCPFProf').mask('000.000.000-00', {reverse: true});
    $("#cadastroSenhaProf").mask("AAAAAAAASSSSSSSS", options);

    $('#cadastroCPFCCP').mask('000.000.000-00', {reverse: true});
})

function validaSenhas(){

    let form = this.parentElement.parentElement.parentElement;
    let passHint = form.querySelector("#pass_hint");

    if ( form.querySelector('#cadastroSenha').value === $(this).val()) {
        $(passHint).html('');
        $(passHint).removeClass('d-block');
        $(passHint).addClass('d-none');
        
        $(this).removeClass("mb-0");
        $(this).addClass("mb-4");
        
        this.setCustomValidity('');
    } else {
        $(passHint).html('As senhas devem ser iguais');
        $(passHint).removeClass('d-none');
        $(passHint).addClass('d-block');
        
        $(this).removeClass("mb-4");
        $(this).addClass("mb-0");
        
        this.setCustomValidity('As senhas devem ser iguais');
    }
}

function zeraEventListener(element){
    document.querySelector(element).querySelector("#confirmaSenha").removeEventListener('keyup', validaSenhas);

}

document.querySelector("#formAluno").querySelector("#confirmaSenha").addEventListener('keyup', validaSenhas);



