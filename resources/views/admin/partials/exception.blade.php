@if($errors->hasBag('exception'))
    <?php $error = $errors->getBag('exception');?>
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        @if(config('app.debug') == true)
            <h4>
                <i class="icon fa fa-warning"></i>
                <i style="border-bottom: 1px dotted #fff;cursor: pointer;" title="{{ $error->first('type') }}" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">{{ class_basename($error->first('type')) }}</i>
                In <i title="{{ $error->first('file') }} line {{ $error->first('line') }}" style="border-bottom: 1px dotted #fff;cursor: pointer;" ondblclick="var f=this.innerHTML;this.innerHTML=this.title;this.title=f;">{{ basename($error->first('file')) }} line {{ $error->first('line') }}</i> :
            </h4>
        @endif
        <p>{!! $error->first('message') !!}</p>
        @if(config('app.debug') == true)
            <p class="hidden" id="laravel-admin-exception-trace"><br>{!! nl2br($error->first('trace')) !!}</p>
        @endif
    </div>
@endif
