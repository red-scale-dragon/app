<?php

namespace App\Exceptions;

use Roots\Acorn\Exceptions\Handler as AcornHandler;
use Illuminate\Routing\Router;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;

class Handler extends AcornHandler {
	public function render($request, \Throwable $e)
	{
		$e = $this->mapException($e);
		
		if (method_exists($e, 'render') && $response = $e->render($request)) {
			return Router::toResponse($request, $response);
		}
		
		if ($e instanceof Responsable) {
			return $e->toResponse($request);
		}
		
		$e = $this->prepareException($e);
		
		if ($response = $this->renderViaCallbacks($request, $e)) {
			return $response;
		}
		
		return match (true) {
			$e instanceof HttpResponseException => $e->getResponse(),
			$e instanceof ValidationException => $this->convertValidationExceptionToResponse($e, $request),
			default => $this->prepareResponse($request, $e),
		};
	}
}
