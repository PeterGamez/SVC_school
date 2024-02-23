<?php

use App\Class\App;

array_shift($agent_request);

if (empty($agent_request[0]) and App::isGET()) {
    return views('index');
}
if ($agent_request[0] == 'directors' and App::isGET() and empty($agent_request[1])) {
    return views('directors');
}
if ($agent_request[0] == 'personnels' and App::isGET() and empty($agent_request[1])) {
    return views('personnels');
}
if ($agent_request[0] == 'departments' and App::isGET()) {
    if (empty($agent_request[1])) { // /departments
        return views('departments.index');
    }
    if (empty($agent_request[2]) or empty($agent_request[3])) { // /departments
        // return redirect('departments');
    }
    if ($agent_request[2] == 'students') {
        $request['branch'] = $agent_request[1];
        if (empty($agent_request[3])) {
            return views('departments.students.index');
        }
        if (empty($agent_request[4])) {
            $request['data'] = $agent_request[3];
            return views('departments.students.view');
        }
    }
}

views('404');
