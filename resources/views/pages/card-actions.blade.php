@extends('layouts/contentLayoutMaster')

@section('title', 'Ações do cartão')

@section('content')
<!-- card actions section start -->
<section id="card-actions">
<!-- Info table about action starts -->
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Ações do cartão </h4>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
              <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>
                <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
                <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                <li><a data-action="close"><i class="feather icon-x"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="card-content collapse show">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Ação</th>
                          <th>Icon</th>
                          <th>Detalhes</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Recolher</td>
                          <td class="text-center">
                            <i class="feather icon-chevron-down"></i>
                          </td>
                          <td> Recolher o conteúdo do cartão usando a ação de recolhimento.</td>
                        </tr>
                        <tr>
                          <td>Expandir Cartão</td>
                          <td class="text-center">
                            <i class="feather icon-maximize"></i>
                          </td>
                          <td>Maximize seu cartão usando a ação de expansão</td>
                        </tr>
                        <tr>
                          <td>Atualizar Conteúdo</td>
                          <td class="text-center">
                            <i class="feather icon-rotate-cw"></i>
                          </td>
                          <td>Atualize o conteúdo do seu cartão usando a ação de atualização.</td>
                        </tr>
                        <tr>
                          <td>Remover Cartão</td>
                          <td class="text-center">
                            <i class="feather icon-x"></i>
                          </td>
                          <td> Remover cartão da página usando a ação remover cartão</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Info table about action Ends -->

    <!-- Collapsible and Refresh Action starts -->
    <div class="row">
      <div class="col-md-6 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Dobrável </h4>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
              <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="card-content collapse show">
            <div class="card-body">
              <p>
                Você pode criar um conteúdo recolhível adicionando <code>[data-action="collapse"]</code> e agrupando-o
                <code>.heading-elements</code> em  <code>.card-header</code>
              </p>
              <p>
                Clique em <i class="feather icon-chevron-down align-middle"></i> para ver o colapso do cartão em ação
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Atualizar Conteúdo</h4>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
              <ul class="list-inline mb-0">
                <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>
                Para criar um cartão com ação de atualização, use <code>[data-action="reload"]</code> dentro de
                <code>.heading-element</code>
              </p>
              <p>
                Clique em <i class="feather icon-rotate-cw align-middle"></i> para ver a atualização do conteúdo do cartão em ação.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Collapsible and Refresh Action Ends -->

    <!-- Expand And Remove Actions Starts -->
    <div class="row">
      <div class="col-md-6 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Remover Cartão</h4>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
              <ul class="list-inline mb-0">
                <li><a data-action="close"><i class="feather icon-x"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="card-content collapse show">
            <div class="card-body">
              <p>
                Você pode crair um cartão closeable usando <code>[data-action="close"]</code> interior
                <code>.heading-element</code>
              </p>
              <p>
                Clique em <i class="feather icon-x align-middle"></i> para ver o colapso do cartão em ação.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Expandir Cartão</h4>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
              <ul class="list-inline mb-0">
                <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="card-content collapse show">
            <div class="card-body">
              <p>
                Use <code>[data-action="expand"]</code> insdie de <code>.heading-elements</code> para maximizar seu cartão.
              </p>
              <p>
                Clique em <i class="feather icon-maximize align-middle"></i> para ver o cartão próximo em ação.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Expand And Remove Actions Ends -->

  </section>
<!-- // card-actions section end -->
@endsection
