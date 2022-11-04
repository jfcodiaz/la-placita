# La Placita

## Setup


### Config git into la_placita_web container.

The principal container to work is la_placita_web, to configure git into it, you need:

#### - Configure your .gitconfig file:
Git does need know how are you for it, copy the file <code>docker/develop/git/.gitconfig.example</code>
to <code>docker/develop/.gitconfig</code> and put into your info. 

Into your local machine:
```shell
cd docker/develop/git
cp .gitconfig.example .gitconfig
```

And edit <code>.gitconfig</code> file with your info:

```text
[user]
    email = youruser@gmail.com
    name = Your Name
```

#### - Configure your ssh certificate:
Git does need your ssh certificate, the way more simple is copy your local private ssh certificate to into 
docker/develop/ssh path


```shell
 cp /home/youruser/.ssh/id_ed25519 {la placita path}/docker/develop/ssh
```
or [you can create **into container** a new certificated](https://docs.github.com/en/authentication/connecting-to-github-with-ssh/generating-a-new-ssh-key-and-adding-it-to-the-ssh-agent) and setup into github like usually we do it.

