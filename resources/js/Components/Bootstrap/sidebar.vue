<script setup>
import { ref } from 'vue';

import { Link } from '@inertiajs/vue3';

</script>



<template>

   <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
				<ul class="metismenu" id="menu">
                    <li><Link  href="/admin">
							<i class="fas fa-home"></i>
							<span class="nav-text">Dashboard</span>
						</Link>
                    </li>
					
                 
                    <li><Link href="/admin/roles" class="">
							<i class="fas fa-user-check"></i>
							<span class="nav-text">Roles</span>
						</Link>
					</li>
                    <li><a  href="" aria-expanded="false">
							<i class="fas fa-file-alt"></i>
							<span class="nav-text">Forms</span>
						</a>
                     
                    </li>
                    <li><a  href="" aria-expanded="false">
							<i class="fas fa-table"></i>
							<span class="nav-text">Table</span>
						</a>
                      
                    </li>
                    <li><a  href="" aria-expanded="false">
							<i class="fas fa-clone"></i>
							<span class="nav-text">Pages</span>
						</a>
                    
                    </li>
                </ul>
			
			
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
		


</template>