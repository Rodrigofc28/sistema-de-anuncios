<div class="col-lg-{{ $size ?? "12" }} mt-2">
    <label for="secao_id"></label>
    <select class="js-single form-control {{ $errors->has('secao_id') ? ' is-invalid' : '' }}" name="secao_id">
        @foreach($secoes as $secao)
        <option value="{{ $secao->id }}" {{ $secao->id == $secao2 ? 'selected=selected' : '' }}>
            {{$secao->nome}}
        </option>
        @endforeach
    </select>
    @include('shared.error_feedback', ['name' => 'secao_id'])
</div>