<template>
   <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                    <form >
                            <div class="col-8">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email">
                                </div>
                              
                            </div>
                            
                      <div class="col-8">
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <input class="input--style-4" type="text" name="pass">
                                </div>
                               
                            </div>
                           
                       <div class="col-8">
                                <div class="input-group">
                                    <label class="label">Confirm Password</label>
                                    <input class="input--style-4" type="text" name="cofirm">
                                </div>
                               
                            </div>
                           <div class="col-8">
                                <div class="input-group">
                                    <label class="label">Name</label>
                                    <input class="input--style-4" type="text" name="name">
                                   
                                </div>
                            </div>   
                             <div class="row row-space">              
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="register"> Submit</button>
                        </div>
                         <div class="p-t-15">
                    <a>
                    <button class="btn btn--radius-2 btn--blue" type="button" > Login</button>
                    </a>
                    </div>
                             </div>

                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {};
</script>

<style>

</style>