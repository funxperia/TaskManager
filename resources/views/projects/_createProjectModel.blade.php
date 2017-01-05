<!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                <i class="fa fa-btn fa-plus" style="margin-right: -2px;"></i>
            </button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="myModalLabel">新建项目</h4>
                        </div>
                        <div class="modal-body">
                            {!! Form::open(['route' => 'projects.store','method' => 'POST','files' => true]) !!}
                                <div class="form-grop">
                                    {!! Form::label('name','项目名称',['class' => 'control-label']) !!}
                                    {!! Form::text('name',null,['class' => 'form-control']) !!}
                                </div>
                                <div class="form-grop">
                                    {!! Form::label('thumbnail','项目缩略图',['class' => 'control-label']) !!}
                                    {!! Form::file('thumbnail') !!}
                                </div>
                            @include('errors/errors')
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                            {!! Form::submit('新建项目',['class' => 'btn btn-primary']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>