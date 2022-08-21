<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container">
 <div class="row">
   <div class="col">
   <table class="table table-striped table-inverse table-responsive">
       <thead class="thead-inverse">
           <tr>
               <th>ITEM</th>
               <th>DESCRIPCIÓN</th>
               <th>PRECIO</th>
               <th>STOCK</th>
               <th>Añadir cesta</th>
           </tr>
           </thead>
           <tbody>
               @forelse ($productos as $item)
               <tr>
                <td scope="row">{{$loop->iteration}}</td>
                <td>{{$item->descripcion}}</td>
                <td>{{$item->precio}}</td>
                <td>{{$item->stock}}</td>
                <td>
                    <form action="{{ route('tienda.addcesta') }}" method="post">
                        @csrf
                        <input type="text" name="idprod" hidden value="{{$item->id_producto}}">
                        <button class="btn btn-danger">Añadir cesta</button>
                    </form>
                </td>
            </tr>
            
               @empty
                   
               @endforelse
           </tbody>
   </table>
   {{Cart::getContent()}}

   <a href="{{ route('carrito') }}">ir a carrito {{count(Cart::getContent())}}</a>
   </div>
 </div>
</div>