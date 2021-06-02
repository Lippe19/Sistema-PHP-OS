
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
	
	
//                            //Pesquisar os cursos sem refresh na página
//                            $("#pesquisa").keyup(function () {
//
//                                var pesquisa = $(this).val();
//
//                                //Verificar se há algo digitado
//                                if (pesquisa != '') {
//                                    var dados = {
//                                        palavra: pesquisa
//                                    }
//                                    $.post('busca.php', dados, function (retorna) {
//                                        //Mostra dentro da ul os resultado obtidos 
//                                        $(".resultado").html(retorna);
//                                    });
//                                } else {
//                                    $(".resultado").html('');
//                                }
//                            });
});

jQuery(document).ready(function () {
    jQuery('.scrollbar-inner').scrollbar();
});

                        
$(document).ready(function () {
	
	
	
	
	
	

    var toggle_sidebar = false,
            toggle_topbar = false,
            nav_open = 0,
            topbar_open = 0;

    if (!toggle_sidebar) {
        $toggle = $('.sidenav-toggler');

        $toggle.click(function () {
            if (nav_open == 1) {
                $('html').removeClass('nav_open');
                $toggle.removeClass('toggled');
                nav_open = 0;
            } else {
                $('html').addClass('nav_open');
                $toggle.addClass('toggled');
                nav_open = 1;
            }
        });
        toggle_sidebar = true;
    }

    if (!toggle_topbar) {
        $topbar = $('.topbar-toggler');

        $topbar.click(function () {
            if (topbar_open == 1) {
                $('html').removeClass('topbar_open');
                $topbar.removeClass('toggled');
                topbar_open = 0;
            } else {
                $('html').addClass('topbar_open');
                $topbar.addClass('toggled');
                topbar_open = 1;
            }
        });
        toggle_topbar = true;
    }

//select all
    $('[data-select="checkbox"]').change(function () {
        $target = $(this).attr('data-target');
        $($target).prop('checked', $(this).prop("checked"));
    })


    //modal p/ apagar 
    $('a[data-confirm]').click(function (ev) {
        var href = $(this).attr('href');
        if (!$('#confirm-delete').length) {
            $('body').append('<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header bg-danger text-white">EXCLUIR CADASTRO<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body">Tem certeza de que deseja apagar esse cadastro?</div><div class="modal-footer"><button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button><a class="btn btn-danger text-white" id="dataComfirmOK">Apagar</a></div></div></div></div>');
        }
        $('#dataComfirmOK').attr('href', href);
        $('#confirm-delete').modal({show: true});
        return false;

    });

});