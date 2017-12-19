<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/11
 * Time: 17:09
 */

namespace App\Bootstrap;


use App\Application;
use ErrorException;

class HandleExceptions
{
    /**
     * The application instance.
     *
     * @var Application
     */
    protected $app;
    public function bootstrap(Application $app)
    {
        $this->app = $app;

        error_reporting(-1);

        set_error_handler([$this, 'handleError']);

        set_exception_handler([$this, 'handleException']);

        register_shutdown_function([$this, 'handleShutdown']);

        if (! $app->environment('testing')) {
            ini_set('display_errors', 'Off');
        }
    }

    /**
     * Convert PHP errors to ErrorException instances.
     *
     * @param  int  $level
     * @param  string  $message
     * @param  string  $file
     * @param  int  $line
     * @param  array  $context
     * @return void
     *
     * @throws \ErrorException
     */
    public function handleError($level, $message, $file = '', $line = 0, $context = [])
    {
        if (error_reporting() & $level) {
            throw new ErrorException($message, 0, $level, $file, $line);
        }
    }

    /**
     * Handle an uncaught exception from the application.
     *
     * Note: Most exceptions can be handled via the try / catch block in
     * the HTTP and Console kernels. But, fatal error exceptions must
     * be handled differently since they are not normal exceptions.
     *
     * @param  \Throwable  $e
     * @return void
     */
    public function handleException($e)
    {

    }

    /**
     * Handle the PHP shutdown event.
     *
     * @return void
     */
    public function handleShutdown()
    {
//        if (! is_null($error = error_get_last()) && $this->isFatal($error['type'])) {
//            $this->handleException($this->fatalExceptionFromError($error, 0));
//        }
    }

    public function report(\Exception $e)
    {

    }
}