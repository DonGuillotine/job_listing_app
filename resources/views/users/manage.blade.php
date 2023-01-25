<x-layouts>
  
        <div class="wrapper circle-bg">
        
            <div class="circle-color fixed">
                <div class="gradient-circle"></div>
                <div class="gradient-circle two"></div>
            </div>
        
                    <!-- ==================== Start Header ==================== -->
        
                    <section class="page-header">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-9">
                                    <div class="cont text-center">
                                        <h1 class="mb-10 color-font">Manage Listings</h1>
                                     <!--    <p>All the most current news and events of our creative team.</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
            
                    <!-- ==================== Start Header ==================== -->
            
        
            <section class="blog-pg section-padding pt-0">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-11">
                            <div class="posts">
                                <div class="item mb-80">
                                    <div class="content">
                                        <div class="row justify-content-center">
                                            <div class="col-10">
                                                <table class="table table-dark">
                                                    <tbody>
                                                    @if ($listings->isEmpty())
                                                        <tr class="border-gray">
                                                            <td class="px-4 py-8 border-t border-b border-gray text-lg">
                                                                <p class="text-center text-danger">No Listings Found</p>
                                                            </td>
                                                        </tr>
                                                    @else
                                                    @foreach ($listings as $listing)
                                                        <tr>
                                                            <th scope="row">{{ $loop->index + 1 }}</th>
                                                            <td>{{ $listing->title }}</td>
                                                            <td><a href="/{{ $listing->id }}/edit"><i class="fa-solid fa-pen-to-square"></i> Edit</a></td>
                                                            <td>
                                                                <form method="POST" action="/{{ $listing->id }}">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-danger p-1"><i class="fa-solid fa-trash"></i> Delete Job</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    @endif    
                                                    
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
            </section>
        </div>
        
        <!-- ==================== End Blog ==================== -->
       
</x-layouts>