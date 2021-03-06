import React, { useState, useEffect } from 'react';
import axios from 'axios';
import routeName from '../../../routeName';

// == Components 
import PageTitle from '../../small_components/PageTitle/PageTitle';

// == Style
import GTCStyled from './GTCStyled';

const GTC = () => {

  const dataLegalMentions = 'Le présent document n’a qu’une valeur indicative et ne saurait dispenser d’un conseil juridique. À ce titre, et sous réserve de respecter les mentions obligatoires légales applicables à ce type d’acte, le vendeur peut aménager librement ses conditions générales de vente en fonction de la nature de son activité. CLAUSE n° 1 : Objet Les conditions générales de vente décrites ci-après détaillent les droits et obligations de la société ... (dénomination sociale) et de son client dans le cadre de la vente des marchandises suivantes : ... (le vendeur doit recenser les marchandises soumises aux CGV). Toute prestation accomplie par la société ... (dénomination sociale) implique donc l’adhésion sans réserve de l’acheteur aux présentes conditions générales de vente. CLAUSE n° 2 : Prix Les prix des marchandises vendues sont ceux en vigueur au jour de la prise de commande. Ils sont libellés en euros et calculés hors taxes. Par voie de conséquence, ils seront majorés du taux de TVA et des frais de transport applicables au jour de la commande. La société ... (dénomination sociale) s’accorde le droit de modifier ses tarifs à tout moment. Toutefois, elle s’engage à facturer les marchandises commandées aux prix indiqués lors de l’enregistrement de la commande. CLAUSE n° 3 : Rabais et ristournes Les tarifs proposés comprennent les rabais et ristournes que la société ... (dénomination sociale) serait amenée à octroyer compte tenu de ses résultats ou de la prise en charge par l’acheteur de certaines prestations. CLAUSE n° 4 : Escompte Aucun escompte ne sera consenti en cas de paiement anticipé. CLAUSE n° 5 : Modalités de paiement Le règlement des commandes s’effectue : soit par chèque ; soit par carte bancaire ; le cas échéant, indiquer les autres moyens de paiement acceptés. Lors de l’enregistrement de la commande, l’acheteur devra verser un acompte de 10% du montant global de la facture, le solde devant être payé à réception des marchandises. CLAUSE n° 6 : Retard de paiement En cas de défaut de paiement total ou partiel des marchandises livrées au jour de la réception, l’acheteur doit verser à la société ... (dénomination sociale) une pé nalité de retard égale à trois fois le taux de l’intérêt légal. Le taux de l’intérêt légal retenu est celui en vigueur au jour de la livraison des marchandises. A compter du 1er janvier 2015, le taux d’intérêt légal sera révisé tous les 6 mois (Ordonnance n°2014-947 du 20 août 2014). Cette pénalité est calculée sur le montant TTC de la somme restant due, et court à compter de la date d’échéance du prix sans qu’aucune mise en demeure préalable ne soit nécessaire. En sus des indemnités de retard, toute somme, y compris l’acompte, non payée à sa date d’exigibilité produi ra de plein droit le paiement d’une indemnité forfaitaire de 40 euros due au titre des frais de recouvrement. Articles 441-6, I alinéa 12 et D. 441-5 du code de commerce. CLAUSE n° 7 : CLAUSE résolutoire Si dans les quinze jours qui suivent la mise en oeuvre de la CLAUSE « Retard de paiement «, l’acheteur ne s’est pas acquitté des sommes restant dues, la vente serarésolue de plein droit et pourra ouvrir droit à l’allocation de dommages et intérêts au profit de la société ... (dénomination sociale). CLAUSE n° 8 : CLAUSE de réserve de propriété La société ... (dénomination sociale) conserve la propriété des biens vendus jusqu’au paiement intégral du prix, en principal et en accessoires. À ce titre, si l’acheteur fait l’objet d’un redressement ou d’une liquidation judiciaire, la société ... (dénomination sociale) se réserve le droit de revendiquer, dans le cadre de la procédure collective, les marchandises vendues et restées impayées. CLAUSE n° 9 : Livraison La livraison est effectuée : soit par la remise directe de la marchandise à l’acheteur ; soit par l’envoi d’un avis de mise à disposition en magasin à l’attention de l’acheteur ; soit au lieu indiqué par l’acheteur sur le bon de commande. Le délai de livraison indiqué lors de l’enregistrement de la commande n’est donné qu’à titre indicatif et n’est aucunement garanti. Par voie de conséquence, tout retard raisonnable dans la livraison des produits ne pourra pas donner lieu au profit de l’acheteur à : l’allocation de dommages et intérêts ; l’annulation de la commande. Le risque du transport est supporté en totalité par l’acheteur. En cas de marchandises manquantes ou détériorées lors du transport, l’acheteur devra formuler toutes les réserves nécessaires sur le bon de commande à réception desdites marchandises. Ces réserves devront être, en outre, confirmées par écrit dans les cinq jours suivant la livraison, par courrier recommandé AR. CLAUSE n° 10 : Force majeure La responsabilité de la société ... (dénomination sociale) ne pourra pas être mise en oeuvre si la non-exécution ou le retard dans l’exécution de l’une de ses obligations décrites dans les présentes conditions générales de vente découle d’un cas de force majeure. À ce titre, la force majeure s’entend de tout événement extérieur, imprévisible et irrésistible au sens de l’article 1148 du Code civil. CLAUSE n° 11 : Tribunal compétent Tout litige relatif à l’interprétation et à l’exécution des présentes conditions géné rales de vente est soumis au droit français. À défaut de résolution amiable, le litige sera porté devant le Tribunal de commerce ... (lieu du siège social).';

  const [legalMentions, setLegalMentions] = useState([])

  useEffect (() => {
    axios({
      method: 'get',
      url: routeName + 'dataPage'
    })
      .then((response) => {
        console.log(response.data[3]);
        setLegalMentions(response.data[3]);
      })
      .catch((error) => {
        console.log('Une erreur est survenue : ', error);
      });
  }, []);

  return (
    <GTCStyled>
      <PageTitle title="Conditions générales de vente et mentions légales" content="Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, aliquid!" />
      <p className="txt-content">{legalMentions.content}</p>
      {/* <p className="txt-content">Le présent document n’a qu’une valeur indicative et ne saurait dispenser d’un conseil juridique. À ce titre, et sous réserve de respecter les mentions obligatoires légales applicables à ce type d’acte, le vendeur peut aménager librement ses conditions générales de vente en fonction de la nature de son activité. <br />
      Clause n° 1 : Objet <br />
      Les conditions générales de vente décrites ci-après détaillent les droits et obligations de la société ... (dénomination sociale) et de son client dans le cadre de la vente des marchandises suivantes : ... (le vendeur doit recenser les marchandises soumises aux CGV). Toute prestation accomplie par la société ... (dénomination sociale) implique donc l’adhésion sans réserve de l’acheteur aux présentes conditions générales de vente. <br />
      Clause n° 2 : Prix <br />
      Les prix des marchandises vendues sont ceux en vigueur au jour de la prise de commande. Ils sont libellés en euros et calculés hors taxes. Par voie de conséquence, ils seront majorés du taux de TVA et des frais de transport applicables au jour de la commande. La société ... (dénomination sociale) s’accorde le droit de modifier ses tarifs à tout moment. Toutefois, elle s’engage à facturer les marchandises commandées aux prix indiqués lors de l’enregistrement de la commande. <br />
      Clause n° 3 : Rabais et ristournes <br />
      Les tarifs proposés comprennent les rabais et ristournes que la société ... (dénomination sociale) serait amenée à octroyer compte tenu de ses résultats ou de la prise en charge par l’acheteur de certaines prestations. <br />
      Clause n° 4 : Escompte <br />
      Aucun escompte ne sera consenti en cas de paiement anticipé. <br />
      Clause n° 5 : Modalités de paiement <br />
      Le règlement des commandes s’effectue : soit par chèque ; soit par carte bancaire ; le cas échéant, indiquer les autres moyens de paiement acceptés. Lors de l’enregistrement de la commande, l’acheteur devra verser un acompte de 10% du montant global de la facture, le solde devant être payé à réception des marchandises. <br />
      Clause n° 6 : Retard de paiement <br />
      En cas de défaut de paiement total ou partiel des marchandises livrées au jour de la réception, l’acheteur doit verser à la société ... (dénomination sociale) une pé nalité de retard égale à trois fois le taux de l’intérêt légal. Le taux de l’intérêt légal retenu est celui en vigueur au jour de la livraison des marchandises. A compter du 1er janvier 2015, le taux d’intérêt légal sera révisé tous les 6 mois (Ordonnance n°2014-947 du 20 août 2014). Cette pénalité est calculée sur le montant TTC de la somme restant due, et court à compter de la date d’échéance du prix sans qu’aucune mise en demeure préalable ne soit nécessaire. En sus des indemnités de retard, toute somme, y compris l’acompte, non payée à sa date d’exigibilité produi ra de plein droit le paiement d’une indemnité forfaitaire de 40 euros due au titre des frais de recouvrement. Articles 441-6, I alinéa 12 et D. 441-5 du code de commerce. <br />
      Clause n° 7 : Clause résolutoire <br />
      Si dans les quinze jours qui suivent la mise en oeuvre de la clause « Retard de paiement «, l’acheteur ne s’est pas acquitté des sommes restant dues, la vente serarésolue de plein droit et pourra ouvrir droit à l’allocation de dommages et intérêts au profit de la société ... (dénomination sociale). <br />
      Clause n° 8 : Clause de réserve de propriété <br />
      La société ... (dénomination sociale) conserve la propriété des biens vendus jusqu’au paiement intégral du prix, en principal et en accessoires. À ce titre, si l’acheteur fait l’objet d’un redressement ou d’une liquidation judiciaire, la société ... (dénomination sociale) se réserve le droit de revendiquer, dans le cadre de la procédure collective, les marchandises vendues et restées impayées. <br />
      Clause n° 9 : Livraison <br />
      La livraison est effectuée : soit par la remise directe de la marchandise à l’acheteur ; soit par l’envoi d’un avis de mise à disposition en magasin à l’attention de l’acheteur ; soit au lieu indiqué par l’acheteur sur le bon de commande. Le délai de livraison indiqué lors de l’enregistrement de la commande n’est donné qu’à titre indicatif et n’est aucunement garanti. Par voie de conséquence, tout retard raisonnable dans la livraison des produits ne pourra pas donner lieu au profit de l’acheteur à : l’allocation de dommages et intérêts ; l’annulation de la commande. Le risque du transport est supporté en totalité par l’acheteur. En cas de marchandises manquantes ou détériorées lors du transport, l’acheteur devra formuler toutes les réserves nécessaires sur le bon de commande à réception desdites marchandises. Ces réserves devront être, en outre, confirmées par écrit dans les cinq jours suivant la livraison, par courrier recommandé AR. <br />
      Clause n° 10 : Force majeure <br />
      La responsabilité de la société ... (dénomination sociale) ne pourra pas être mise en oeuvre si la non-exécution ou le retard dans l’exécution de l’une de ses obligations décrites dans les présentes conditions générales de vente découle d’un cas de force majeure. À ce titre, la force majeure s’entend de tout événement extérieur, imprévisible et irrésistible au sens de l’article 1148 du Code civil. <br />
      Clause n° 11 : Tribunal compétent <br />
      Tout litige relatif à l’interprétation et à l’exécution des présentes conditions géné rales de vente est soumis au droit français. À défaut de résolution amiable, le litige sera porté devant le Tribunal de commerce ... (lieu du siège social).</p> */}
    </GTCStyled>
  );
};

export default GTC;