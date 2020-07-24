Olá {!! $user->display_name !!}!

{!! $blueprint->post->user->display_name !!} fez um novo post em uma discussão que você segue: {!! $blueprint->post->discussion->title !!}

Para ver a nova atividade, clique no link:
{!! app()->url() !!}/d/{!! $blueprint->post->discussion_id !!}/{!! $blueprint->post->number !!}

---

{!! $blueprint->post->content !!}

---

Você não receberá novas notificações nessa postagem até estar atualizado!