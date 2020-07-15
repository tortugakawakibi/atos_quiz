<?php

shell_exec('sudo stress --cpu 1 --io 4 --vm 4 --vm-bytes 1024M --timeout 120s');