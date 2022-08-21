<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container">
    @if (count(Cart::getContent())>0)
    <form action="{{route('tienda.clear')}}" method="post">
        @csrf
        <button class="btn btn-danger">Limpiar Carro</button>
    </form>
    @endif
 <div class="row">
   <div class="col">
   <table class="table table-striped table-inverse table-responsive">
       <thead class="thead-inverse">
           <tr>
               <th>ITEM</th>
               <th>DESCRIPCIÓN</th>
               <th>PRECIO</th>
               <th>CANTIDAD</th>
               <th>QUITAR</th>
           </tr>
           </thead>
           <tbody>
               @forelse (Cart::getContent() as $item)
               <tr>
                <td scope="row">{{$loop->iteration}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td>
                   <form action="{{ route('updates') }}" method="post">
                    @csrf
                       <button value="menos" name="ok">-</button>
                       <input type="text" name="id" value="{{$item->id}}" hidden>
                       <input type="text" name="cantida" value="{{$item->quantity}}" disabled>
                       <button value="mas" name="ok">+</button>
                    </form> 
                   
                    
                </td>
                <td>
                    <form action="{{ route('tienda.item.remove') }}" method="post">
                        @csrf
                        <input type="text" name="idprod" hidden value="{{$item->id}}">
                        <button class="btn btn-danger">Añadir cesta</button>
                    </form>
                </td>
            </tr>
            
               @empty
                   <td colspan="5">no hay productos añadidos al carrito
                       <a href="{{ route('tienda.index') }}">Ir a Tienda </a>
                   </td>
               @endforelse
           </tbody>
   </table>
 
   </div>
 </div>
</div>