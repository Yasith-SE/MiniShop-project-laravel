<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserHasRole
{
    public function handle(Request $request, Closure $next, string ...$roles): Response
    {
        $user = $request->user();

        if (! $user) {
            abort(403);
        }

        $allowedRoles = collect($roles)
            ->flatMap(fn (string $role): array => $this->aliasesFor($role))
            ->unique()
            ->all();

        if (! in_array($this->normalizeRole($user->role), $allowedRoles, true)) {
            abort(403);
        }

        return $next($request);
    }

    private function normalizeRole(?string $role): string
    {
        return str_replace('-', '_', strtolower($role ?? 'customer'));
    }

    /**
     * Keep older "admin" users working while supporting the super_admin role.
     */
    private function aliasesFor(string $role): array
    {
        $role = $this->normalizeRole($role);

        return match ($role) {
            'admin', 'super_admin' => ['admin', 'super_admin'],
            default => [$role],
        };
    }
}
