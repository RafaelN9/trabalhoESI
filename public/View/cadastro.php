<?php include_once('simple_header.php'); 

    $queryCurso = "SELECT * FROM Cursos";
    $resultCurso = runSQL($queryCurso);
    $optionCurso = '';
    while($rowCurso = mysqli_fetch_assoc($resultCurso)){
        $optionCurso .= '<option value='.$rowCurso['Codigo'].'>'.$rowCurso['Nome'].'</option>';
    }

    $queryProfessor = "SELECT Nome, CPF FROM Professor";
    $resultProfessor = runSQL($queryProfessor);
    $optionProfessor = '';
    while($rowProfessor = mysqli_fetch_assoc($resultProfessor)){
        $optionProfessor .= '<option value='.$rowProfessor['CPF'].'>'.$rowProfessor['Nome'].'</option>';
    }
?>
    <script type="text/javascript" src="scripts/jquery.mask.js"></script>

    <div class="container-fluid h-100 d-flex align-items-center">
        <div class="container-fluid ">
            <div class="row h-100 p-md-5 justify-content-center">
                <div class="col-sm-12 col-md-10 col-lg-6 col-xl-5 bg-princ-escuro h-100 rounded">
                    <div class="d-flex justify-content-around mt-2">
                        <div class="btn-group" role="group">
                            <button id="cadastroAluno" class="btn btn-success active p-3">Aluno</button>
                            <button id="cadastroProf" class="btn btn-success p-3">Professor</button>
                            <button id="cadastroCCP" class="btn btn-success p-3">CCP</button>
                        </div>
                    </div>
                    <div id="formAluno" class="d-flex justify-content-center pt-5 pb-5 h-100 p-sm-3 p-md-5">
                        <form class="w-100" method="POST" action="../index.php">
                            <label for="cadastroNumUsp" class="text-white">Número USP</label>
                            <input type="text"  class="form-control mb-4 p-4" name="cadastroNumUsp" id="cadastroNumUsp" placeholder="N° USP" required>

                            <label for="cadastroNome" class="text-white">Nome</label>
                            <input type="text"  class="form-control mb-4 p-4" name="cadastroNome" id="cadastroNome" placeholder="Nome" required>
                            
                            <label for="cadastroNome" class="text-white">Email</label>
                            <input type="email" class="form-control mb-4 p-4" name="cadastroEmail" id="cadastroEmail" aria-describedby="emailHelp" placeholder="Email" required>
                            
                            <label for="cadastroCPF" class="text-white">CPF</label>
                            <input type="text"  class="form-control mb-4 p-4" name="cadastroCPF" id="cadastroCPF" minlength="14" maxlength="14" placeholder="CPF" required >
                            
                            <label for="cadastroSenha" class="text-white">Senha</label>
                            <div class="input-group mb-4">
                                <input type="password" class="form-control p-4" name="cadastroSenha" id="cadastroSenha" minlength="8" maxlength="16" aria-describedby="pwdHelp" placeholder="Senha" required>
                                <div class="input-group-append">
                                    <span class="input-group-text" style="height: 50px;" onclick="senha_mostra_esconde(this)">
                                        <i class="fas fa-eye" id="show_eye"></i>
                                        <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                                    </span>
                                </div>
                            </div>

                            <label for="confirmaSenha" class="text-white">Confirme a senha</label>
                            <div class="input-group mb-1">
                                <input type="password" class="form-control p-4" id="confirmaSenha" minlength="8" maxlength="16" aria-describedby="pwdHelp" placeholder="Repita a senha" required>
                                <div class="input-group-append">
                                    <span class="input-group-text" style="height: 50px;" onclick="senha_mostra_esconde(this)">
                                        <i class="fas fa-eye" id="show_eye"></i>
                                        <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                                    </span>
                                </div>
                            </div>
                            <p id="pass_hint" style="color: #FFFFFF;"></p>

                            <label for="cadastroCurriculo" class="text-white">Link do currículo</label>
                            <input type="text"  class="form-control mb-4 p-4" name="cadastroCurriculo" id="cadastroCurriculo" placeholder="Link" required>
                            
                            <label for="cadastroCurso" class="text-white">Curso</label>
                            <select name="cadastroCurso" class="form-control mb-4" style="height:50px;" id="cadastroCurso" required>
                            <?php
                                echo $optionCurso;
                            ?>
                            </select>

                            <label for="profResp" class="text-white">Professor responsável</label>
                            <select name="profResp" class="form-control mb-4" style="height:50px;" id="profResp" required>
                                <?php
                                echo $optionProfessor;
                                ?>
                            </select>

                            <input type="submit" class="btn btn-primary p-3 float-right" name="cadastroAluno" value="Cadastrar">
                        </form>
                    </div>


                    <div id="formProfessor" class="d-none justify-content-center pt-5 pb-5 h-100 p-sm-3 p-md-5">
                        <form class="w-100" method="POST" action="../index.php">
                            <label for="cadastroNome" class="text-white">Nome</label>
                            <input type="text"  class="form-control mb-4 p-4" name="cadastroNome" id="cadastroNomeProf" placeholder="Nome" required>
                            
                            <label for="cadastroNome" class="text-white">Email</label>
                            <input type="email" class="form-control mb-4 p-4" name="cadastroEmail" id="cadastroEmailProf"  aria-describedby="emailHelp" placeholder="Email" required>
                            
                            <label for="cadastroCPF" class="text-white">CPF</label>
                            <input type="text"  class="form-control mb-4 p-4" name="cadastroCPF" id="cadastroCPFProf" minlength="14" maxlength="14" placeholder="CPF" required>
                            
                            <label for="cadastroSenha" class="text-white">Senha</label>
                            <div class="input-group mb-4">
                                <input type="password" class="form-control p-4" name="cadastroSenha" id="cadastroSenha" minlength="8" maxlength="16" aria-describedby="pwdHelp" placeholder="Senha" required>
                                <div class="input-group-append">
                                    <span class="input-group-text" style="height: 50px;" onclick="senha_mostra_esconde(this)">
                                        <i class="fas fa-eye" id="show_eye"></i>
                                        <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                                    </span>
                                </div>
                            </div>

                            <label for="confirmaSenha" class="text-white">Confirme a senha</label>
                            <div class="input-group mb-4">
                                <input type="password" class="form-control p-4" id="confirmaSenha" minlength="8" maxlength="16" aria-describedby="pwdHelp" placeholder="Repita a senha" required>
                                <div class="input-group-append">
                                    <span class="input-group-text" style="height: 50px;" onclick="senha_mostra_esconde(this)">
                                        <i class="fas fa-eye" id="show_eye"></i>
                                        <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                                    </span>
                                </div>
                            </div>
                            <p id="pass_hint" style="color: #FFFFFF;"></p>
                            
                            <input type="submit" class="btn btn-primary p-3 float-right" name="cadastroProf" value="Cadastrar">
                        </form>
                    </div>


                    <div id="formCCP" class="d-none justify-content-center pt-5 pb-5 h-100 p-sm-3 p-md-5">
                        <form class="w-100" method="POST" action="../index.php">
                            <label for="cadastroCPF" class="text-white">CPF Professor</label>
                            <input type="text"  class="form-control mb-4 p-4" name="cadastroCPF" id="cadastroCPFCCP" minlength="14" maxlength="14" placeholder="CPF" required>
                            
                            <input type="submit" class="btn btn-primary p-3 float-right" name="cadastroCCP"  value="Cadastrar">
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="scripts/scritpCadastro.js?<?php echo time(); ?>"></script>
    <script type="text/javascript" src="scripts/scriptSenhaShowHide.js?<?php echo time(); ?>"></script>
    
<?php include_once('footer.php');?>