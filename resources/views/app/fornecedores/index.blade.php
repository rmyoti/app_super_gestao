<h2>Fornecedores</h2>

{{-- COMENTARIOS NA SINTAXE BLADE --}}

@php
 /*   if(){

    } elseif(){

    }else {

    } */
@endphp 

{{-- @dd($fornecedores) --}}
@isset($fornecedores) {{-- Verifica se existe a variável antes de utiliza-la, caso nao exista vai pular o bloco--}}

    @forelse ( $fornecedores as $contador => $fornecedor)
        Iteraçao Atual {{ $loop ->iteration }} <br />
        Fornecedor: {{ $fornecedores[$contador]['nome']}}
        <br />
        Status: {{ $fornecedores[$contador]['status']}}
        <br />
        cnpj: {{ $fornecedores[$contador]['cnpj'] ?? 'Dado não foi preenchido'}}
        <br />
        telefone: {{ $fornecedores[$contador]['ddd'] ?? ''}} {{ $fornecedores[$contador]['telefone'] ?? 'vazio'}}
        
        @if($loop ->first)
            <br />
            Primeira Iteraçao
        @endif
        
        @if($loop ->last)
            <br />
            Ultima Iteraçao
                <br /> <hr>
                Total de registros: {{ $loop ->count }}
        @endif
        <hr>
    @empty
        Não existem fornecedores cadastrados.
    @endforelse
        

@endisset
