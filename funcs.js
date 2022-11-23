var req;

function cstfiltro(id) {

// Verificando Browser
if(window.XMLHttpRequest) {
   req = new XMLHttpRequest();
}
else if(window.ActiveXObject) {
   req = new ActiveXObject("Microsoft.XMLHTTP");
}

// Arquivo PHP juntamento com a id da noticia (método GET)
var url = "cstfiltroresultado.php?filtroresultado="+id;

// Chamada do método open para processar a requisição
req.open("Get", url, true);

// Quando o objeto recebe o retorno, chamamos a seguinte função;
req.onreadystatechange = function() {

	// Exibe a mensagem "Aguarde..." enquanto carrega
	if(req.readyState == 1) {
		document.getElementById('filtroresultado').innerHTML = 'Aguarde...';
	}

	// Verifica se o Ajax realizou todas as operações corretamente
	if(req.readyState == 4 && req.status == 200) {

	// Resposta retornada pelo exibir.php
	var resposta = req.responseText;

	// Abaixo colocamos a resposta na div filtroresultado
	document.getElementById('filtroresultado').innerHTML = resposta;
	}
}
  req.send(null);
  }

//referente a solicitação vinda da pagina cstfiltroresultado.php
function consultamovimentonumenfmov() {
    var idcoligada = document.getElementById('coligada').value;
    var movimento = document.getElementById('movimento').value;
    //variavel que se altera
    var numeronfmov = document.getElementById('numeronfmov').value;
    // Verificando Browser
    if(window.XMLHttpRequest) { req = new XMLHttpRequest(); }
    else if(window.ActiveXObject) { req = new ActiveXObject("Microsoft.XMLHTTP");}
      // Arquivo PHP juntamento com a id da noticia (método GET)
      var url = "func/verifica_nota_fiscal.php?idcoligada="+idcoligada+"&movimento="+movimento+"&numeronfmov="+numeronfmov;
      // Chamada do método open para processar a requisição
      req.open("Get", url, true);
      // Quando o objeto recebe o retorno, chamamos a seguinte função;
      req.onreadystatechange = function() {
        	// Exibe a mensagem "Aguarde..." enquanto carrega
        	if(req.readyState == 1) {
        		document.getElementById('consultanotafiscalresultado').innerHTML = 'Aguarde...';
        	}
          	// Verifica se o Ajax realizou todas as operações corretamente
          	if(req.readyState == 4 && req.status == 200) {
          	// Resposta retornada pelo exibir.php
          	var resposta = req.responseText;
          	 // Abaixo colocamos a resposta na div filtroresultado
          	 document.getElementById('consultanotafiscalresultado').innerHTML = resposta;
          	}
      }
    req.send(null);
  }
function consultamovimentoidentificador() {
      var idcoligada = document.getElementById('coligada').value;
      var movimento = document.getElementById('movimento').value;
      //variavel que se altera
      var identificador = document.getElementById('identificador').value;
      // Verificando Browser
      if(window.XMLHttpRequest) { req = new XMLHttpRequest(); }
      else if(window.ActiveXObject) { req = new ActiveXObject("Microsoft.XMLHTTP");}
        // Arquivo PHP juntamento com a id da noticia (método GET)
        var url = "func/verifica_nota_fiscal.php?idcoligada="+idcoligada+"&movimento="+movimento+"&identificador="+identificador;
        // Chamada do método open para processar a requisição
        req.open("Get", url, true);
        // Quando o objeto recebe o retorno, chamamos a seguinte função;
        req.onreadystatechange = function() {
          	// Exibe a mensagem "Aguarde..." enquanto carrega
          	if(req.readyState == 1) {
          		document.getElementById('consultanotafiscalresultado').innerHTML = 'Aguarde...';
          	}
            	// Verifica se o Ajax realizou todas as operações corretamente
            	if(req.readyState == 4 && req.status == 200) {
            	// Resposta retornada pelo exibir.php
            	var resposta = req.responseText;
            	 // Abaixo colocamos a resposta na div filtroresultado
            	 document.getElementById('consultanotafiscalresultado').innerHTML = resposta;
            	}
        }
      req.send(null);
    }
function consultamovimentovariosnumeronfmov() {
  var idcoligada = document.getElementById('coligada').value;
  var movimento = document.getElementById('movimento').value;
  //variavel que se altera
  var variosnumeronfmov = document.getElementById('variosnumeronfmov').value;
  // Verificando Browser
  if(window.XMLHttpRequest) { req = new XMLHttpRequest(); }
  else if(window.ActiveXObject) { req = new ActiveXObject("Microsoft.XMLHTTP");}
    // Arquivo PHP juntamento com a id da noticia (método GET)
    var url = "func/verifica_nota_fiscal.php?idcoligada="+idcoligada+"&movimento="+movimento+"&variosnumeronfmov="+variosnumeronfmov;
    // Chamada do método open para processar a requisição
    req.open("Get", url, true);
    // Quando o objeto recebe o retorno, chamamos a seguinte função;
    req.onreadystatechange = function() {
      	// Exibe a mensagem "Aguarde..." enquanto carrega
      	if(req.readyState == 1) {
      		document.getElementById('consultanotafiscalresultado').innerHTML = 'Aguarde...';
      	}
        	// Verifica se o Ajax realizou todas as operações corretamente
        	if(req.readyState == 4 && req.status == 200) {
        	// Resposta retornada pelo exibir.php
        	var resposta = req.responseText;
        	 // Abaixo colocamos a resposta na div filtroresultado
        	 document.getElementById('consultanotafiscalresultado').innerHTML = resposta;
        	}
    }
  req.send(null);
}
function consultamovimentovariosidentificadores() {
    var idcoligada = document.getElementById('coligada').value;
    var movimento = document.getElementById('movimento').value;
    //variavel que se altera
    var variosidentificadores = document.getElementById('variosidentificadores').value;
    // Verificando Browser
    if(window.XMLHttpRequest) { req = new XMLHttpRequest(); }
    else if(window.ActiveXObject) { req = new ActiveXObject("Microsoft.XMLHTTP");}
      // Arquivo PHP juntamento com a id da noticia (método GET)
      var url = "func/verifica_nota_fiscal.php?idcoligada="+idcoligada+"&movimento="+movimento+"&variosidentificadores="+variosidentificadores;
      // Chamada do método open para processar a requisição
      req.open("Get", url, true);
      // Quando o objeto recebe o retorno, chamamos a seguinte função;
      req.onreadystatechange = function() {
          // Exibe a mensagem "Aguarde..." enquanto carrega
          if(req.readyState == 1) {
            document.getElementById('consultanotafiscalresultado').innerHTML = 'Aguarde...';
          }
            // Verifica se o Ajax realizou todas as operações corretamente
            if(req.readyState == 4 && req.status == 200) {
            // Resposta retornada pelo exibir.php
            var resposta = req.responseText;
             // Abaixo colocamos a resposta na div filtroresultado
             document.getElementById('consultanotafiscalresultado').innerHTML = resposta;
            }
      }
    req.send(null);
  }
function consultamovimentoanoatual() {
    var idcoligada = document.getElementById('coligada').value;
    var movimento = document.getElementById('movimento').value;
    //variavel que se altera
    var anoatual = document.getElementById('anoatual').value;
    // Verificando Browser
    if(window.XMLHttpRequest) { req = new XMLHttpRequest(); }
    else if(window.ActiveXObject) { req = new ActiveXObject("Microsoft.XMLHTTP");}
      // Arquivo PHP juntamento com a id da noticia (método GET)
      var url = "func/verifica_nota_fiscal.php?idcoligada="+idcoligada+"&movimento="+movimento+"&anoatual="+anoatual;
      // Chamada do método open para processar a requisição
      req.open("Get", url, true);
      // Quando o objeto recebe o retorno, chamamos a seguinte função;
      req.onreadystatechange = function() {
          // Exibe a mensagem "Aguarde..." enquanto carrega
          if(req.readyState == 1) {
            document.getElementById('consultanotafiscalresultado').innerHTML = 'Aguarde...';
          }
            // Verifica se o Ajax realizou todas as operações corretamente
            if(req.readyState == 4 && req.status == 200) {
            // Resposta retornada pelo exibir.php
            var resposta = req.responseText;
             // Abaixo colocamos a resposta na div filtroresultado
             document.getElementById('consultanotafiscalresultado').innerHTML = resposta;
            }
      }
    req.send(null);
  }
function consultamovimentoanoanterior() {
      var idcoligada = document.getElementById('coligada').value;
      var movimento = document.getElementById('movimento').value;
      //variavel que se altera
      var anoanterior = document.getElementById('anoanterior').value;
      // Verificando Browser
      if(window.XMLHttpRequest) { req = new XMLHttpRequest(); }
      else if(window.ActiveXObject) { req = new ActiveXObject("Microsoft.XMLHTTP");}
        // Arquivo PHP juntamento com a id da noticia (método GET)
        var url = "func/verifica_nota_fiscal.php?idcoligada="+idcoligada+"&movimento="+movimento+"&anoanterior="+anoanterior;
        // Chamada do método open para processar a requisição
        req.open("Get", url, true);
        // Quando o objeto recebe o retorno, chamamos a seguinte função;
        req.onreadystatechange = function() {
            // Exibe a mensagem "Aguarde..." enquanto carrega
            if(req.readyState == 1) {
              document.getElementById('consultanotafiscalresultado').innerHTML = 'Aguarde...';
            }
              // Verifica se o Ajax realizou todas as operações corretamente
              if(req.readyState == 4 && req.status == 200) {
              // Resposta retornada pelo exibir.php
              var resposta = req.responseText;
               // Abaixo colocamos a resposta na div filtroresultado
               document.getElementById('consultanotafiscalresultado').innerHTML = resposta;
              }
        }
      req.send(null);
    }
function consultamovimentocodclientefornecedor() {
      var idcoligada = document.getElementById('coligada').value;
      var movimento = document.getElementById('movimento').value;
      //variavel que se altera
      var codclientefornecedor = document.getElementById('codclientefornecedor').value;
      // Verificando Browser
      if(window.XMLHttpRequest) { req = new XMLHttpRequest(); }
      else if(window.ActiveXObject) { req = new ActiveXObject("Microsoft.XMLHTTP");}
        // Arquivo PHP juntamento com a id da noticia (método GET)
        var url = "func/verifica_nota_fiscal.php?idcoligada="+idcoligada+"&movimento="+movimento+"&codclientefornecedor="+codclientefornecedor;
        // Chamada do método open para processar a requisição
        req.open("Get", url, true);
        // Quando o objeto recebe o retorno, chamamos a seguinte função;
        req.onreadystatechange = function() {
            // Exibe a mensagem "Aguarde..." enquanto carrega
            if(req.readyState == 1) {
              document.getElementById('consultanotafiscalresultado').innerHTML = 'Aguarde...';
            }
              // Verifica se o Ajax realizou todas as operações corretamente
              if(req.readyState == 4 && req.status == 200) {
              // Resposta retornada pelo exibir.php
              var resposta = req.responseText;
               // Abaixo colocamos a resposta na div filtroresultado
               document.getElementById('consultanotafiscalresultado').innerHTML = resposta;
              }
        }
      req.send(null);
    }
function consultamovimentococpfcnpj() {
    var idcoligada = document.getElementById('coligada').value;
    var movimento = document.getElementById('movimento').value;
    //variavel que se altera
    var cpfcnpj = document.getElementById('cpfcnpj').value;
    // Verificando Browser
    if(window.XMLHttpRequest) { req = new XMLHttpRequest(); }
    else if(window.ActiveXObject) { req = new ActiveXObject("Microsoft.XMLHTTP");}
      // Arquivo PHP juntamento com a id da noticia (método GET)
      var url = "func/verifica_nota_fiscal.php?idcoligada="+idcoligada+"&movimento="+movimento+"&cpfcnpj="+cpfcnpj;
      // Chamada do método open para processar a requisição
      req.open("Get", url, true);
      // Quando o objeto recebe o retorno, chamamos a seguinte função;
      req.onreadystatechange = function() {
          // Exibe a mensagem "Aguarde..." enquanto carrega
          if(req.readyState == 1) {
            document.getElementById('consultanotafiscalresultado').innerHTML = 'Aguarde...';
          }
            // Verifica se o Ajax realizou todas as operações corretamente
            if(req.readyState == 4 && req.status == 200) {
            // Resposta retornada pelo exibir.php
            var resposta = req.responseText;
             // Abaixo colocamos a resposta na div filtroresultado
             document.getElementById('consultanotafiscalresultado').innerHTML = resposta;
            }
      }
    req.send(null);
  }
function consultamovimentodatainicialfim() {
    var idcoligada = document.getElementById('coligada').value;
    var movimento = document.getElementById('movimento').value;
    //variavel que se altera
    var datainicial = document.getElementById('datainicial').value;
    var datafinal = document.getElementById('datafinal').value;
    // Verificando Browser
    if(window.XMLHttpRequest) { req = new XMLHttpRequest(); }
    else if(window.ActiveXObject) { req = new ActiveXObject("Microsoft.XMLHTTP");}
      // Arquivo PHP juntamento com a id da noticia (método GET)
      var url = "func/verifica_nota_fiscal.php?idcoligada="+idcoligada+"&movimento="+movimento+"&datainicial="+datainicial+"&datafinal="+datafinal;
      // Chamada do método open para processar a requisição
      req.open("Get", url, true);
      // Quando o objeto recebe o retorno, chamamos a seguinte função;
      req.onreadystatechange = function() {
          // Exibe a mensagem "Aguarde..." enquanto carrega
          if(req.readyState == 1) {
            document.getElementById('consultanotafiscalresultado').innerHTML = 'Aguarde...';
          }
            // Verifica se o Ajax realizou todas as operações corretamente
            if(req.readyState == 4 && req.status == 200) {
            // Resposta retornada pelo exibir.php
            var resposta = req.responseText;
             // Abaixo colocamos a resposta na div filtroresultado
             document.getElementById('consultanotafiscalresultado').innerHTML = resposta;
            }
      }
    req.send(null);
  }
function consultamovimentodatahoje() {
    var idcoligada = document.getElementById('coligada').value;
    var movimento = document.getElementById('movimento').value;
    //variavel que se altera
    var datahoje = document.getElementById('datahoje').value;
    // Verificando Browser
    if(window.XMLHttpRequest) { req = new XMLHttpRequest(); }
    else if(window.ActiveXObject) { req = new ActiveXObject("Microsoft.XMLHTTP");}
      // Arquivo PHP juntamento com a id da noticia (método GET)
      var url = "func/verifica_nota_fiscal.php?idcoligada="+idcoligada+"&movimento="+movimento+"&datahoje="+datahoje;
      // Chamada do método open para processar a requisição
      req.open("Get", url, true);
      // Quando o objeto recebe o retorno, chamamos a seguinte função;
      req.onreadystatechange = function() {
          // Exibe a mensagem "Aguarde..." enquanto carrega
          if(req.readyState == 1) {
            document.getElementById('consultanotafiscalresultado').innerHTML = 'Aguarde...';
          }
            // Verifica se o Ajax realizou todas as operações corretamente
            if(req.readyState == 4 && req.status == 200) {
            // Resposta retornada pelo exibir.php
            var resposta = req.responseText;
             // Abaixo colocamos a resposta na div filtroresultado
             document.getElementById('consultanotafiscalresultado').innerHTML = resposta;
            }
      }
    req.send(null);
  }
function consultamovimentodataontem() {
    var idcoligada = document.getElementById('coligada').value;
    var movimento = document.getElementById('movimento').value;
    //variavel que se altera
    var dataontem = document.getElementById('dataontem').value;
    // Verificando Browser
    if(window.XMLHttpRequest) { req = new XMLHttpRequest(); }
    else if(window.ActiveXObject) { req = new ActiveXObject("Microsoft.XMLHTTP");}
      // Arquivo PHP juntamento com a id da noticia (método GET)
      var url = "func/verifica_nota_fiscal.php?idcoligada="+idcoligada+"&movimento="+movimento+"&dataontem="+dataontem;
      // Chamada do método open para processar a requisição
      req.open("Get", url, true);
      // Quando o objeto recebe o retorno, chamamos a seguinte função;
      req.onreadystatechange = function() {
          // Exibe a mensagem "Aguarde..." enquanto carrega
          if(req.readyState == 1) {
            document.getElementById('consultanotafiscalresultado').innerHTML = 'Aguarde...';
          }
            // Verifica se o Ajax realizou todas as operações corretamente
            if(req.readyState == 4 && req.status == 200) {
            // Resposta retornada pelo exibir.php
            var resposta = req.responseText;
             // Abaixo colocamos a resposta na div filtroresultado
             document.getElementById('consultanotafiscalresultado').innerHTML = resposta;
            }
      }
    req.send(null);
  }
