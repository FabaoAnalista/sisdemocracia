@include('layout.header')

    @include('layout.sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('title_page')
        <section class="content">
        <div class="container-fluid">
            <div class="container">
            <div class="row">
              <div class="col-md-6">
                    <h1>Título Projeto: Alteração da lei que regulamenta o estacionamento Rotativo de João Monlevade</h1>
                    <h3>Sub-Título:“DISPÕE SOBRE A IMPLANTAÇÃO DO SISTEMA DE ESTACIONAMENTO ROTATIVO PAGO NO MUNICÍPIO DE JOÃO MONLEVADE”.</h3>
                    <h4>Descrição:</h4>
                    <p>O objetivo do presente projeto é alterar dispositivos da lei que regulamentou o
                      estacionamento rotativo em João Monlevade. Entendendo que o espaço público
                       deve ser de livre acesso e usufruto do cidadão e que o bem coletivo deve estar
                       acima da usura e exploração mercantil, propomos alterar a lei visando adequar a
                       exploração do espaço público destinado ao estacionamento rotativo.</p><br>
                    <section >
                      <div class="row">
                          <div class="text-center">
                            <button type="button" class="btn btn-warning">
                                Assine
                            </button>
                            <button type="button" class="btn btn-warning" >
                                Voltar
                            </button>
                        </div>
                    </div>
                    </section>

              </div>

              <div class="col-md-6">
                  <section id="">
                    <div class="">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/IXyrF8K3lHY" frameborder="0" gesture="media" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    </div>
                  </section>
              <section id="baixarpdf">
                    <div class="container">
                        <div class="row">
                        <div class="col-lg-12 text-center">
                              <h1 class="section-heading">Baixe o PDF do Projeto</h1>
                              <a class="btn btn-lg btn-warning" href="pdf/projeto_rotativo.pdf" target="_new">Projeto Rotativo</a>
                      </div>
            </div>
            </section>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
            </div>
        </div><!--fim container-->

          </div>
        </div>
            @yield('content_page')
      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

@include ('layout.footer')
