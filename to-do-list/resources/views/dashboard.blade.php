
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container">
            <section class="">
                <div class="container py-5 h-100">
                  <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col">
                      <div class="card" id="list1" style="border-radius: .75rem; background-color: #eff1f2;">
                        <div class="card-body py-4 px-4 px-md-5">
              
                          <p class="h1 text-center mt-3 mb-4 pb-3 text-primary">
                            <i class="fas fa-check-square me-1"></i>
                            <u style="text-decoration: none">{{$user->name}}'s To-Do</u>
                          </p>
              
                          
                              <div class="card-body">
                                <form action="{{route('dashboard.add')}}">
                                  <div class="form-group">
                                    <input type="text" name="todo" class="form-control" id="todo" placeholder="Todo Giriniz">
                                    <small class="form-text text-muted">Yapacağınız  şeyi girin.</small>
                                  </div>
                                    <button type="submit" class="btn btn-primary"><span style="color:black;" class="text-muted">Add</span></button>
                                  </div>
                                </form>
                                </div>
                              </div>
                            
                          
                          <hr class="my-4">
                          @if(count($todos) != null)
                          <table class="table table-striped table-hover">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">To-Do</th>
                                <th scope="col">Tarih</th>
                                <th scope="col">Durum</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($todos as $todo)
                              <tr>
                                <th scope="row">{{$loop->index +1}}</th>
                                <td>{{$todo->todo}}</td>
                                
                                <td>{{$todo->created_at}}</td>
                                @if ($todo->isActive)
                                  <td><span class="text-muted btn btn-warning">TAMAMLANMADI</span></td>
                                @else
                                <td><span style="color:white" class="btn btn-success">TAMAMLANDI</span></td>
                                @endif
                              </tr>
                              @endforeach
                              </tbody>
                            </table>
                            <div class="row">
                              <div class="col-6">
                                <form style="display: inline" action="{{route('dashboard.completeChange')}}">
                                  <label for="selectComplete">Durumunu değiştirmek istediğiniz todoyu seçin</label><br/>
                                  <select  name="id" id="selectComplete">
                                  @foreach ($todos as $todo)
                                  <option value="{{$todo->id}}">{{$todo->todo}}</option>
                                  @endforeach
                                </select>
                                <button type="submit" class="btn btn-outline-success">DURUM DEĞİŞTİR</button>
                                </form>
                              </div>
                              <div class="col-6">
                                <form style="display: inline" action="{{route('dashboard.delete')}}">
                                  <label for="selectComplete">Silmek istediğiniz todoyu seçin</label>
                                  <br/>
                                  <select name="deleteId" id="selectDelete">
                                  @foreach ($todos as $todo)
                                  <option value="{{$todo->id}}">{{$todo->todo}}</option>
                                  @endforeach
                                </select>
                                <button type="submit" class="btn btn-outline-success">SİL</button>
                                </form>
                              </div>
                              <div class="p-4"></div>
                            </div>
                            <div class="row">
                              <div class="col-12">
                              <form style="display: inline" action="{{route('dashboard.update')}}">
                                <label for="selectComplete">Güncellemek istediğiniz todoyu seçin</label>
                                <br/>
                                <select name="deleteId" id="selectDelete">
                                @foreach ($todos as $todo)
                                <option value="{{$todo->id}}">{{$todo->todo}}</option>
                                @endforeach
                              </select>
                              <input type="text" style="width: 350px;" name="newTodo" id="newTodo" placeholder="Todonuzun yeni değerini girin.">
                              <button type="submit" class="btn btn-outline-success">GÜNCELLE</button>
                              </form>
                            </div>
                            </div>
                          @else
                          <p style="text-align: center;" class="text-muted">HENÜZ BİR TODO OLUŞTURMADINIZ.</p>
                            @endif
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
        </div>
            </div>
        </div>
    </div>

</x-app-layout>
