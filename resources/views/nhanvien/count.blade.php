@extends('layout.main')
@section('main_body')

          
        
               <div class="card-header bg-danger">
                    <div class="row">
                                  <div class="col-md-12" align="center">
                                       <h1 class="btn text-light"> DANH SÁCH NHÂN VIÊN</h1>
                                  </div>
                    
                     </div>
</div>
</br>
<div> <a href="" class=" btn btn-primary"><i class="btn-icon-only icon-edit">Thêm mới</i></a> <br></div> 
                   <div class="card-body">
                  
                   @if(Session::has('thongbao'))
                      <div class="alert alert-success">
                         {{Session::get('thongbao')}}
                      </div>
                      @endif
                                <table class="table table-bordered ">
                                     <thread >
                                         </tr >
                                          
                                           <th align="center">MÃ NHÂN VIÊN</th>
                                          
                                         
                                           <th align="center">TONG CONG</th>
                                           <th align="center">TÙY CHỈNH</th>
                                          </tr>
                                     </thread>
                                    
                                     <tbody>
                                     @foreach ($data as $sv)
                                     <tr>
                                     
                                        <td>{{$sv->ma_nv}}</td>
                                        <td>{{$sv->total}}</td>
                                      
                                       
                                        
                                        <td class="td-actions">
                        <a href="" class="  btn btn-primary"><i class="btn-icon-only icon-edit">Sửa</i></a>

                        <a href="" class="  btn btn-danger">
                            <i class="btn-icon-only icon-remove">Xóa</i>
                        </a>
                    </td>
                                     </tr>
                                       @endforeach 
                                   
                                    </tbody>
                               </table>
                          
                 
                  
                 
                 </div >   
              </div>
           </div>
           

       @endsection

