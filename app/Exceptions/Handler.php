<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Handler extends ExceptionHandler
{
   
    protected $dontReport = [
        //
    ];
    
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    public function report(Exception $exception)
    {
        parent::report($exception);
    }
  
    public function render($request, Exception $exception)
    {               
        if($request->is("api/*")){    
                      
            if($exception instanceof ValidationException) {
                return response()->json(
                    $exception->errors(),
                    $exception->status
                );
            }            
            if ($exception instanceof ModelNotFoundException) {
                return response()->json([
                    'error' => 'Entry for '.str_replace('App\\', '', $exception->getModel()).' not found'], 404);           
            }
        }
        return parent::render($request, $exception);
    }
}
