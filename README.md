# engine-sdk-gateway
This package provides gateway interfaces used in Engine for your internal apps.

## Installation
```bash
$ composer require betalabs/engine-sdk-gateway
```

## Pix Automático (recurring Pix debit)

Optional contract for gateways that support Pix Automático. A gateway driver
opts in by implementing the two interfaces below; Engine checks `instanceof`
and refuses the payment method when the driver does not implement them, so
drivers that do not support it are not affected.

| Interface | Role |
|---|---|
| `PixAutomaticAuthorizer` | `authorizePixAutomatic`, `refreshPixAutomaticAuthorization`, `cancelPixAutomaticAuthorization` |
| `PixAutomaticCharger` | `schedulePixAutomaticCharge`, `retryPixAutomaticCharge`, `cancelPixAutomaticCharge` |
| `PixAutomaticAuthorization` | The authorization itself. Implemented by Engine (a persisted model), like `Transaction`: the gateway reads what to create from the getters and writes the gateway's answer through the setters. |

How it maps to what already exists:

- The **authorization** plays the role the tokenized card plays for credit cards:
  it is created once per subscription, after the payer approves it in the bank app.
- Each **cycle** is a scheduled debit (`schedulePixAutomaticCharge`) created days
  *before* the due date. Nothing is paid when it returns: the `Transaction` is
  `waiting payment` and the final status arrives later (postback or polling),
  using the existing `TransactionStatus`.
- A debit refused for lack of balance is the only retryable one. The gateway
  must say which kind of failure it was in the history's status reason.
- Enums (`PixAutomaticPeriodicity`, `PixAutomaticAmountMode`,
  `PixAutomaticAuthorizationStatus`) use the Central Bank of Brazil's concepts,
  not any gateway's vocabulary: each driver translates them.

Design and rollout: `docs/payments/pix-automatico-plano.md` in the Engine repository.