@extends('admin.layouts.layoutAdmin')
@section('contents')
<?php
$page = Illuminate\Support\Facades\DB::table('settings-page')->select('*')->first();
?>
<title>Montechelo-Logs</title>
<link rel="icon" href="{{$page->logoisotipo}}" type="image/png">
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="col-md-17">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Historial</h4>
                        <div class="card-body">
                            <div class="row row-demo-grid">
                                @foreach($folders as $folder)
                                <div class="col-xl-4">
                                    <a href="?f={{ \Illuminate\Support\Facades\Crypt::encrypt($folder) }}">
                                        <span class="fa fa-folder"></span> {{$folder}}
                                    </a>
                                    @if ($current_folder == $folder)
                                    <div>
                                        @foreach($folder_files as $file)
                                        <a href="?l={{ \Illuminate\Support\Facades\Crypt::encrypt($file) }}&f={{ \Illuminate\Support\Facades\Crypt::encrypt($folder) }}" class="col-xl-4  @if ($current_file == $file) llv-active @endif">
                                            {{$file}}
                                        </a>
                                        @endforeach
                                    </div>
                                    @endif
                                    @endforeach
                                    @foreach($files as $file)
                                    <a href="?l={{ \Illuminate\Support\Facades\Crypt::encrypt($file) }}" class="list-group-item @if ($current_file == $file) llv-active @endif">
                                        {{$file}}
                                    </a>
                                    @endforeach</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Gestión de Logs</h4>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="col">
                            <div class="custom-control custom-switch" style="padding-bottom:20px;" hidden>
                                <input type="checkbox" class="custom-control-input" id="darkSwitch">
                                <label class="custom-control-label" for="darkSwitch"></label>
                            </div>
                        </div>
                        <div class="col-14 table-container">
                            @if ($logs === null)
                            <div>
                                Archivo de registro > 50M, descárguelo.
                            </div>
                            @else
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="table-log" class="display table table-striped table-hover" data-ordering-index="{{ $standardFormat ? 2 : 0 }}">
                                        <thead>
                                            <tr>
                                                @if ($standardFormat)
                                                <th>Nivel</th>
                                                <th>Contexto</th>
                                                <th>Fecha</th>
                                                @else
                                                <th>Line number</th>
                                                @endif
                                                <th>Contenido</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($logs as $key => $log)
                                            <tr data-display="stack{{{$key}}}">
                                                @if ($standardFormat)
                                                <td class="nowrap text-{{{$log['level_class']}}}">
                                                    <span style="margin-left: 13px;" class="fa fa-{{{$log['level_img']}}}" aria-hidden="true"></span>&nbsp;&nbsp;{{$log['level']}}
                                                </td>
                                                <td class="text">{{$log['context']}}</td>
                                                @endif
                                                <td class="date">{{{$log['date']}}}</td>
                                                <td class="text">
                                                    @if ($log['stack'])
                                                    <button type="button" style="margin-right: 28px;" class="float-right expand btn btn-outline-dark btn-sm mb-2 ml-2" data-display="stack{{{$key}}}">
                                                        <span class="fa fa-search"></span>
                                                    </button>
                                                    @endif
                                                    <div style="width: 93%;">{{{$log['text']}}}</div>
                                                    @if (isset($log['in_file']))
                                                    <br />{{{$log['in_file']}}}
                                                    @endif
                                                    @if ($log['stack'])
                                                    <div class="stack" id="stack{{{$key}}}" style="display: none; white-space: pre-wrap;">{{{ trim($log['stack']) }}}
                                                    </div>
                                                    @endif
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                                <div class="p-3">
                                    @if($current_file)
                                    <a href="?dl={{ \Illuminate\Support\Facades\Crypt::encrypt($current_file) }}{{ ($current_folder) ? '&f=' . \Illuminate\Support\Facades\Crypt::encrypt($current_folder) : '' }}">
                                        <span class="fa fa-download"></span>Descargar archivo.
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@include('vendor.laravel-log-viewer.scripts')
@endsection
