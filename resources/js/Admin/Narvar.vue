<template>
  <div class="overflow-y-hidden overflow-x-hidden" style="height: max-content;">
    <div class="rounded-r bg-gray-900 xl:hidden flex justify-between w-full p-6 items-center ">
        <div class="flex justify-between  items-center space-x-3">
            <p class="text-2xl leading-6 text-white">OvonRueden</p>    
        </div>
        <div  aria-label="toggler" class="flex justify-center items-center">
            <button aria-label="open" id="open" @click="showNav(true)"  class="hidden focus:outline-none focus:ring-2" >
            </button>
            <button aria-label="close" id="close" @click="showNav(true)" class=" focus:outline-none focus:ring-2" >
                    </button>                           
        </div>
    </div>
    <div id="Main"  class="xl:rounded-r transform  xl:translate-x-0  ease-in-out transition duration-500 flex justify-start items-start h-auto  w-full sm:w-64 bg-gray-900 flex-col">
        <div class="hidden xl:flex justify-start p-6 items-center space-x-3">
                <p class="text-2xl leading-6 text-white">OvonRueden</p>                
        </div>
        <div class="mt-6 flex flex-col justify-start items-center  pl-4 w-full border-gray-600 border-b space-y-3 pb-5 ">
            
            <button class="flex jusitfy-start items-center w-full  space-x-6 focus:outline-none text-white focus:text-indigo-400   rounded ">
                    <p class="text-base leading-4 ">Users</p>                    
            </button>
        </div>
        <div class="flex flex-col justify-start items-center   px-6 border-b border-gray-600 w-full  ">
            <button @click="showMenu1(true)" class="focus:outline-none focus:text-indigo-400 text-left  text-white flex justify-between items-center w-full py-5 space-x-14  ">
                <p class="text-sm leading-5  uppercase">Profile Overview</p>
            </button>
            <div id="menu1" class="flex justify-start  flex-col w-full md:w-auto items-start pb-1 ">
                <button class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                    
                        <p class="text-base leading-4  ">Messages</p>                        
                </button>
                <button class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                                            
                        <p class="text-base leading-4  ">Security</p>                        
                </button>
                <button class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2 w-full md:w-52">
                                           
                        <p class="text-base leading-4  ">Settings</p>                        
                </button>
                <button class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                                                             
                        <p class="text-base leading-4  ">Notifications</p>                        
                </button>
                <button class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                                                                  
                        <p class="text-base leading-4  ">Passwords</p>                        
                </button>
                <button class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                                                                                                        
                        <p class="text-base leading-4  ">Goals</p>                        
                </button>
            </div>
        </div>
        <div class="flex flex-col justify-start items-center   px-6 border-b border-gray-600 w-full  ">
            <button @click="showMenu2(true)" class="focus:outline-none focus:text-indigo-400  text-white flex justify-between items-center w-full py-5 space-x-14  ">
                <p class="text-sm leading-5 uppercase">VENDORS</p>
            </button>
            <div  class="hidden flex justify-start flex-col items-start pb-5 ">
                <button class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                    
                        <p class="text-base leading-4  ">Messages</p>                        
                </button>
                <button class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                                           
                        <p class="text-base leading-4  ">Security</p>                        
                </button>
                <button class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2 w-full md:w-52">
                                           
                        <p class="text-base leading-4  ">Settings</p>                        
                </button>
                <button class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                                                             
                        <p class="text-base leading-4  ">Notifications</p>                        
                </button>
                <button class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                                                                  
                        <p class="text-base leading-4  ">Passwords</p>                        
                </button>
                <button class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-full md:w-52">
                                                                                                        
                        <p class="text-base leading-4  ">Goals</p>                        
                </button>
            </div>
        </div>
        <div class="flex flex-col justify-between items-center h-full pb-6   px-6  w-full  space-y-32 ">
            <button @click="showMenu3(true)" class="focus:outline-none focus:text-indigo-400  text-white flex justify-between items-center w-full py-5 space-x-14  ">
                <p class="text-sm leading-5  uppercase">SERVICES</p>
            </button>
            <div class="hidden flex justify-start flex-col items-start pb-5 ">
                <button class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-52">
                    
                        <p class="text-base leading-4  ">Messages</p>                        
                </button>
                <button class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-52">
                                           
                        <p class="text-base leading-4  ">Security</p>                        
                </button>
                <button class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2 w-52">
                                            
                        <p class="text-base leading-4  ">Settings</p>                        
                </button>
                <button class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-52">
                                                              
                        <p class="text-base leading-4  ">Notifications</p>                        
                </button>
                <button class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-52">
                                                                  
                        <p class="text-base leading-4  ">Passwords</p>                        
                </button>
                <button class="flex justify-start items-center space-x-6 hover:text-white focus:bg-gray-700 focus:text-white hover:bg-gray-700 text-gray-400 rounded px-3 py-2  w-52">
                                                                                                        
                        <p class="text-base leading-4  ">Goals</p>                        
                </button>
            </div>
            
        </div>
    </div>
</div>
</template>

<script>
export default {
    data(){
        return{

        }
    },
    mounted(){
          let icon1 = document.getElementById("icon1");
        let menu1 = document.getElementById("menu1");
        
        let icon2 = document.getElementById("icon2");
      
        
        let icon3 = document.getElementById("icon3");
      
        

        let Main = document.getElementById("Main");
        let open = document.getElementById("open");
        let close = document.getElementById("close")

       
    },
    methods:{
        showMenu1(flag){
            if (flag) {
                icon1.classList.toggle("rotate-180");
                menu1.classList.toggle("hidden")
            }
        },
        showMenu2(flag){
            if (flag) {
                icon2.classList.toggle("rotate-180");   
            }
        },
        showMenu3(flag){
            if (flag) {
                icon3.classList.toggle("rotate-180");
            }
        },
          showNav(flag){
            if (flag) {
                Main.classList.toggle("-translate-x-full")
                Main.classList.toggle("translate-x-0")
                open.classList.toggle("hidden");
                close.classList.toggle("hidden")
            } 
        }
    }
}
</script>




